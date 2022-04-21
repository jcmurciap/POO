<?php

namespace Juan;

class FileLogger implements Logger
{
    public function info($message)
    {
        // guarda el contenido dentro de un archivo de texto
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND //si el archivo ya existe, agrege el contenido al final,si no creelo
        );
    }
}
