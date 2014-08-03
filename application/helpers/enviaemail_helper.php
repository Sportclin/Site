<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('element'))
{  
     function enviaemail($txt) {
        $acentos = array(
            'À', 'Á', 'Ã', 'Â', 'à', 'á', 'ã', 'â',
            'Ê', 'É','é', 'ê',
            'Í', 'í',
            'Ó', 'Õ', 'Ô', 'ó', 'õ', 'ô',
            'Ú', 'Ü','ú', 'ü',
            'Ç', 'ç'
        );
        $remove_acentos = array(
            'A', 'A', 'A', 'A', 'a', 'a', 'a', 'a',
            'E', 'E','e', 'e',
            'I', 'i',
            'O', 'O', 'O', 'o', 'o', 'o',
            'U', 'U','u', 'u',
            'C', 'c'
        );
        return str_replace($acentos, $remove_acentos, urldecode($txt));
    }  
}
