<?php
include("init.php");

$FrontendCMS->Authorization->logout();
$FrontendCMS->Template->redirect(SITE_PATH);
