<?php

include('../init.php');
include('models/modelSettings.php');

$settings = new Settings();
$FrontendCMS->Authorization->checkAuthorization();

if (isset($_POST['submit'])) {
    
    $FrontendCMS->Template->setData('oldpass', $_POST['oldpass']);
    $FrontendCMS->Template->setData('newpass', $_POST['newpass']);
    $FrontendCMS->Template->setData('newpass2', $_POST['newpass2']);
    
    // validation & check
    if ($_POST['oldpass'] == '' || $_POST['newpass'] == '' || $_POST['newpass2'] == '' ) {
        $FrontendCMS->Template->setAlert('Fill required fields','error');
        $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
    } else if ($_POST['newpass'] != $_POST['newpass2']) {
        $FrontendCMS->Template->setAlert('Value in the fields of new password must be the same','error');
        $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
    } else if ($FrontendCMS->Authorization->validateLogin($FrontendCMS->Authorization->getCurrentUserName(), $FrontendCMS->Template->getData('oldpass')) == false) {
        $FrontendCMS->Template->setAlert('The old password is incorrect','error');
        $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
    } else {
        $changed = $settings->changePassword($FrontendCMS->Authorization->getCurrentUserName(), $FrontendCMS->Template->getData('newpass'));
        if($changed == true) {
            $FrontendCMS->Template->setData('oldpass','');
            $FrontendCMS->Template->setData('newpass','');
            $FrontendCMS->Template->setData('newpass2','');
            $FrontendCMS->Template->setAlert('Password has been changed','success');
            $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
        } else {
            $FrontendCMS->Template->setData('oldpass','');
            $FrontendCMS->Template->setData('newpass','');
            $FrontendCMS->Template->setData('newpass2','');
            $FrontendCMS->Template->setAlert('Error','error');
            $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
        }
    }
    
} else {
    $FrontendCMS->Template->load(APP_PATH . 'settings/views/viewPassword.php');
}
