<?php

/**
 * Main class Core
 */
class Core {
    
    public $Template;
    public $Authorization;
    public $Database;
    public $Cms;

    public function __construct($server, $user, $pass, $db)
    {
        $this->Database = new mysqli($server, $user, $pass, $db);
        $this->Database->set_charset('utf8');

        // template
        include(APP_PATH . "core/models/modelTemplate.php");
        $this->Template = new Template();
        $this->Template->setAlertTypes(array('success', 'warning', 'error'));

        // authorization
        include(APP_PATH . "core/models/modelAuthorization.php");
        $this->Authorization = new Authorization();

        // main cms object
        include(APP_PATH . "cms/models/modelCms.php");
        $this->Cms = new Cms();

        // session
        session_start();
    }
    
    function __destruct(){
        $this->Database->close();
    }
    
    function head()
    {
        if ($this->Authorization->checkLoginStatus()) {
            include(APP_PATH . "core/templates/templateHead.php");
        }
        if (isset($_GET['login']) && $this->Authorization->checkLoginStatus() == false) {
            include(APP_PATH . "core/templates/templateLogin.php");
        }
    }
    
    function toolbar()
    {
        if ($this->Authorization->checkLoginStatus()) {
            include(APP_PATH . "core/templates/templateToolbar.php");
        }
    }
    
    function loginButton()
    {
        if ($this->Authorization->checkLoginStatus()) {
            echo "<a href='" . SITE_PATH . "app/logout.php' class='btn btn-secondary btn-sm'>Logout: ". $_SESSION['username'] ."</a>";
        } else {
            echo "<a href='?login' class='btn btn-secondary btn-sm'>Login</a>";
        }
    }
    
}
