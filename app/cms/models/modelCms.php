<?php

/**
 * Class Cms
 * This class is responsible for modifying blocks of relevant types in the database
 */
class Cms
{
    private $contentTypes = array('wysiwyg', 'textarea', 'oneline');
    private $FrontendCMSprv;
    
    public function __construct()
    {
        global $FrontendCMS;
        $this->FrontendCMSprv = &$FrontendCMS;
    }

    /**
     * Cleaning id
     * @param $id
     * @return string
     */
    public function cleanBlockId($id)
    {
        $id = str_replace(' ', '_', $id); // czyścimy spacje
        $id = str_replace('-', '_', $id); // zamieniamy - na _
        $id = preg_replace("/[^a-zA-Z0-9_]/", '', $id); // dozwolone znaki
        return strtolower($id);
    }

    /**
     * Main function
     * @param $id
     * @param string $type
     */
    public function displayBlock($id, $type = 'wysiwyg')
    {
        $id = $this->cleanBlockId($id);
        
        $type = strtolower(htmlentities($type, ENT_QUOTES));
        if (in_array($type, $this->contentTypes) == false) {
            echo "<script>alert('Invalid content type {wysiwyg|textarea|oneline}: $type')</script>";
            return;
        }
        
        $content = $this->loadBlock($id);
        if ($content === false) {
            $this->createBlock($id);
            $content = '';
        }
            
        if ($this->FrontendCMSprv->Authorization->checkLoginStatus()) { // logged in
            $editStart = '<div class="cms_edit">';
            $editType = '<a class="cms_edit_type label label-inverse" href="' . SITE_PATH . 'app/cms/editController.php?id=' . $id . '&type=' .
            $type . '">' . $type . '</a>';
            $editLink = '<a class="cms_edit_link" href="' . SITE_PATH . 'app/cms/editController.php?id=' . $id . '&type=' . $type . '">Edytuj blok</a>';
            $editEnd = '</div>';
           
            echo $editStart . $editType . $editLink . $content . $editEnd;
        } else {
            echo $content; // not logged in
        }
    }

    public function generateField($type, $content) // do editController.php
    {
        if ($type == 'wysiwyg') {
            return '<textarea name="field" id="field" class="wysiwyg">' . $content . '</textarea>';
        } elseif ($type == 'textarea') {
            return '<textarea name="field" id="field" class="textarea">' . $content . '</textarea>';
        } elseif ($type == 'oneline') {
            return '<input name="field" id="field" class="oneline" value="' . $content . '">';
        } else {
            $error = '<p>You must use valid content type {wysiwyg|textarea|oneline}</p>';
            return $error;
        }
    }

    /**
     * Loading block from database
     * @param $id
     * @return bool
     */
    public function loadBlock($id)
    {
        if ($stmt = $this->FrontendCMSprv->Database->prepare("SELECT content FROM content WHERE id = ?")) {
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows != false) { // record exists
                $stmt->bind_result($content); // update content
                $stmt->fetch(); // fetch from database
                $stmt->close();
                return $content;
            } else {
                $stmt->close();
                return false;
            }
        }
    }

    /**
     * Create new block in database
     * @param $id
     */
    public function createBlock($id)
    {
        if ($stmt = $this->FrontendCMSprv->Database->prepare("INSERT INTO content (id) VALUES (?)")) {
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $stmt->close();
        }
    }

    /**
     * Update block in database
     * @param $id
     * @param $content
     */
    public function updateBlock($id, $content)
    {
        if ($stmt = $this->FrontendCMSprv->Database->prepare("UPDATE content SET content = ? WHERE id = ?")) {
            $stmt->bind_param('ss', $content, $id);
            $stmt->execute();
            $stmt->close();
        }
    }
}
