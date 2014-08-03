<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('element'))
{  
    function linkActive($parametro, $condicoes = array()) 
    {
        foreach ($condicoes as $condicao)
        {
            if ($parametro == $condicao)
            {
                return ' active';
            }
        }
    }   
}
