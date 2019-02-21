<?php

if (!function_exists('randstr')) {
    function randstr($length=10, $upper=false, $number=false) 
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $characters_upper = strtoupper($characters);
        $characters_number = '0123456789';

        if ($upper) {
            $characters.= $characters_upper;
            // 
        }

        if ($number) {
            $characters .= $characters_number;
            // 
        }

        // 
        
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}