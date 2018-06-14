<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('convertToBase64'))
    {

        function cutText($text, $length)
        {
            if(strlen($text) > $length){
                return substr($text, 0, $length)." ...";
            }
            else{
                return $text;
            }
        }

    }