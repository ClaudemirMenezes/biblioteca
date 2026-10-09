<?php 

// 1° O diretório base do projeto

// 2° Onde estão as views do projeto

// 3° Acesso ao banco de dados



define('BASE_DIR', dirname(__FILE__, 1)); 
define('VIEW', BASE_DIR . '/View');


$_ENV['db']['host'] = 'localhost';
$_ENV['db']['port'] = '3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'Sup0rt3seinfo';
$_ENV['db']['database'] = 'biblioteca';