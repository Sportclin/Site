<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "home";
$route['404_override'] = '';

//ROTAS PARA ADMINISTRACAO
$route['admin'] = 'admin/login'; 
$route['admin/(:any)'] = 'admin/$1';
$route['avaliacao-fisica'] = 'avaliacaofisica';
$route['agita-bahia'] = 'agitabahia';

/* End of file routes.php */
/* Location: ./application/config/routes.php */