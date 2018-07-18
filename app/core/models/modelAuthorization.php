<?php

class Authorization
{
    private $salt = 'e6G3h5sd';

    function __construct()
    {
    }
    
    public function validateLogin($user, $pass)
    {
        global $FrontendCMS;

        if ($stmt = $FrontendCMS->Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
            $pass = md5($pass.$this->salt);
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows > 0) {
                $stmt->close();
                return true;
            } else {
                $stmt->close();
                return false;
            }
        } else {
            die();
        }
    }
    
    public function checkLoginStatus()
    {
        if (isset($_SESSION['loggedin'])) {
            return true;
        } else {
            return false;
        }
    }

    public function checkAuthorization()
    {
        global $FrontendCMS;
        if ($this->checkLoginStatus() == false) {
            $FrontendCMS->Template->error('unathorized');
            exit;
        }
    }
    
    public function getCurrentUserName()
    {
        return $_SESSION['username'];
    }
    
    public function getSalt()
    {
        return $this->salt;
    }
    
    public function logout()
    {
        session_destroy();
        session_start();
    }
}
