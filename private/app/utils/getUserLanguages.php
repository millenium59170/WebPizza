<?php
/**
 * Détermine les langues de l'utilisateur
 * 
 */
if (!function_exists('getUserLanguage')) 
{
    function getUserLanguages(){
        $languages_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $languages_arr = explode(",", $languages_str);

       foreach($languages_arr as $key => $lang){
           echo $lang."<br>";
       }
       dump($languages_arr);
    }
}
getUserLanguages();