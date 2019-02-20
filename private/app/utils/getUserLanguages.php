<?php

/**
* Determine les langues de l'utilisateur
*
*/

   if(!function_exists('getUserLanguages')){
       /**
        * Retourne les langues de l'utilisateur.
        *
        * @return mixed
        */
       function getUserLanguages($all = false){
           $languages = explode(",", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
           foreach($languages as $key => $lang){
               $languages[$key] = explode(";",$lang)[0];
           }
           return ($all ? $languages : $languages[0]);
       }
   }

   dump(getUserLanguages());
?>