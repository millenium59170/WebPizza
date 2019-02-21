<?php
/**
 * Dump permet d'afficher une donnée entre les balises <pre>
 *
 * @param [mixed] $data 
 */
if (!function_exists('dump')) 
{
    function dump( $data ) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}