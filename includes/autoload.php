<?php

const CLASSES_FOLDER = "class";
const TRAITS_FOLDER = "traits";

spl_autoload_register(function ($nombre_clase) {

    $dirs = [CLASSES_FOLDER, TRAITS_FOLDER];
    
    foreach ($dirs as $dir) {
        $ruta = dirname(__DIR__) . '\\' . $dir . '\\' . $nombre_clase . '.php';
        $ruta = str_replace("\\", DIRECTORY_SEPARATOR, $ruta);
        if (file_exists($ruta)) {
            include_once $ruta;
            return;
        }
    }
});

//    /* Cuando se usan espacios de nombres o traits:
//     * $nombre_clase incluye el nombre del espacio de nombres:  pago\TarjetaCreditoPago o log\Logger
//     *      Cambiamos barra invertida del ns por el separador de directorios del Sist. Operativo
//     */
//
//    //https://www.php.net/manual/en/language.constants.magic.php
//    //__DIR__ The directory of the file. If used inside an include, the directory of the included file is returned
//    //https://www.php.net/manual/en/function.dirname.php
//    //dirname: Returns a parent directory's path 
