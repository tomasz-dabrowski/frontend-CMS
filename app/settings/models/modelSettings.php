<?php

class Settings {
   
   function changePassword($username, $newpass)
   {
       global $FrontendCMS;
       
       if ($stmt = $FrontendCMS->Database->prepare("UPDATE users SET password = ? WHERE username = ? ")) {
           $stmt->bind_param('ss', md5($newpass . $FrontendCMS->Authorization->getSalt()), $username);
           $stmt->execute();
           $stmt->close();
           return true;
       } else {
           return false;
       }
   }
}
