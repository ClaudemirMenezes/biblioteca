<?php 

// 1° O diretório base do projeto

// 2° Onde estão as views do projeto

// 3° Acesso ao banco de dados



define('BASE_DIR', dirname(__FILE__, 1)); 
define('VIEW', BASE_DIR . '/Views');


$_ENV['bd'] ['host'] = 'localhost:3306';
$_ENV['bd'] ['user'] = 'root';
$_ENV['bd'] ['pass'] = 'Sup0rt3seinfo';
$_ENV['bd'] ['database'] = 'biblioteca';