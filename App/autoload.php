<?php

spl_autoload_register(function ($nome_da_classe) 
{
    if (strpos($nome_da_classe, 'App\\') !== 0) {
        return;
    }

    $caminho_da_classe = substr($nome_da_classe, 4);
    $caminho_da_classe = str_replace('\\', DIRECTORY_SEPARATOR, $caminho_da_classe);
    $arquivo = BASE_DIR . DIRECTORY_SEPARATOR . $caminho_da_classe . '.php';

    if (file_exists($arquivo)) {
        include $arquivo;
    } else {
        throw new Exception("O arquivo da classe não foi encontrado: " . $arquivo);
    }
});