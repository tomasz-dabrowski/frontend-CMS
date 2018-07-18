<?php
include("init.php");

if (isset($_POST['username'])) {
    
    $FrontendCMS->Template->setData('input_user', $_POST['username']);
    $FrontendCMS->Template->setData('input_pass', $_POST['password']);
    
    if ($_POST['username'] == '' || $_POST['password'] == '') {
        $FrontendCMS->Template->setAlert('Fill in the required fields','error');
        echo '<script>$.colorbox.resize();</script>';
        $FrontendCMS->Template->load(APP_PATH . "core/views/viewLogin.php");
    } else if ($FrontendCMS->Authorization->validateLogin($FrontendCMS->Template->getData('input_user'),
               $FrontendCMS->Template->getData('input_pass')) == false) {
        $FrontendCMS->Template->setAlert('Wrong login or password','error');
        echo '<script>$.colorbox.resize();</script>';
        $FrontendCMS->Template->load(APP_PATH . "core/views/viewLogin.php");
    } else {
        $_SESSION['username'] = $FrontendCMS->Template->getData('input_user');
        $_SESSION['loggedin'] = true;
        $FrontendCMS->Template->load(APP_PATH . "core/views/viewLoggining.php");
    }
    
} else {
    $FrontendCMS->Template->load(APP_PATH . "core/views/viewLogin.php");
}
