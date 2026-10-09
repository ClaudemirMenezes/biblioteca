<?php

// 1° O Diretório base
// 2° Onde estão as views
// 3° Acesso ao banco de dados


define('BASE_DIR',  dirname(__FILE__, 2));
define('VIEWS_DIR', BASE_DIR . '/View');

$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '';
$_ENV['db']['database'] = 'biclioteca';