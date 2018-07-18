<?php

/**
 * Controller for edit content
 */
include("../init.php");
$FrontendCMS->Authorization->checkAuthorization();

if (isset($_POST['field'])) {
    $id = $FrontendCMS->Cms->cleanBlockId($_POST['id']);
    $type = htmlentities($_POST['type'], ENT_QUOTES);
    $content = $_POST['field'];
    
    $FrontendCMS->Cms->updateBlock($id, $content);
    $FrontendCMS->Template->load(APP_PATH . "cms/views/viewSaving.php");
} else {
    if (isset($_GET['id']) == false || isset($_GET['type']) == false) {
        $FrontendCMS->Template->error();
        exit;
    }
    
    $id = $FrontendCMS->Cms->cleanBlockId($_GET['id']);
    $type = htmlentities($_GET['type'], ENT_QUOTES);
    $content = $FrontendCMS->Cms->loadBlock($id);
    
    $FrontendCMS->Template->setData('block_id', $id);
    $FrontendCMS->Template->setData('block_type', $type);
    $FrontendCMS->Template->setData('cms_field', $FrontendCMS->Cms->generateField($type, $content), false);

    $FrontendCMS->Template->load(APP_PATH . 'cms/views/viewEdit.php');
}

