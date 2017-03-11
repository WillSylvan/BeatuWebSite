<?php
 namespace App\Http\Controllers;
 
 class WellcomeController {
     public function index() {

        $links = array("photo", "video", "music", "forum", "meter");
         foreach ($links as $link) {
            echo "$link <br>";
        }
      }
   }
  
 