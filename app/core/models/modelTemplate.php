<?php

class Template
{
    private $data;
    private $alertTypes;
    
    public function __construct()
    {
    }

    public function load($url)
    {
        include($url);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function setData($name, $value, $clean = true)
    {
        if ($clean) {
            $this->data[$name] = htmlentities($value, ENT_QUOTES);
        } else {
            $this->data[$name] = $value;
        }
    }

    public function setAlertTypes($types)
    {
        $this->alertTypes = $types;
    }

    public function setAlert($value, $type = null)
    {
        if ($type == '') {
            $type = $this->alertTypes[0];
        }
        $_SESSION[$type][] = $value;
    }
    
    public function getAlerts()
    {
        $data = '';
        foreach ($this->alertTypes as $alert) {
            if (isset($_SESSION[$alert])) {
                foreach ($_SESSION[$alert] as $value) {
                    $data .= '<li class="alert alert-' . $alert . '">' . $value . '</li>';
                }
                unset($_SESSION[$alert]);
            }
        }
        return $data;
    }
    
    public function getData($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return '';
        }
    }
    
    public function error($type = '')
    {
        if ($type == 'unathorized') {
            $this->load(APP_PATH . 'core/views/viewUnauthorized.php');
        } else {
            $this->load(APP_PATH . 'core/views/viewError.php');
        }
    }
}
