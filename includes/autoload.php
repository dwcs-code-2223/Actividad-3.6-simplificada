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

//    /* Cuando se usan espacios de nombres:
//     * $nombre_clase incluye el nombre del espacio de nombres:  pago\TarjetaCreditoPago
//     *      Cambiamos barra invertida del ns por el separador de directorios del Sist. Operativo
//     */
//
//    echo "### $nombre_clase<br/>";
//    $nombre_ruta_fichero = getNombreRutaFichero($nombre_clase);
//    //echo "#### nombre ruta fichero: " . $nombre_ruta_fichero . "<br/>";
//
//    if (file_exists($nombre_ruta_fichero)) {
//        include_once $nombre_ruta_fichero;
//    }
//});

//function getNombreRutaFichero($nombre_clase) {
//    //Por defecto, buscaremos en CLASSES_FOLDER
//    $parent_folder = CLASSES_FOLDER;
//
//    if (strpos($nombre_clase, TRAITS_FOLDER) !== false) {
//        $parent_folder = ""; //traits folder ya está presente en el paquete de los traits
//    }
//
//    //https://www.php.net/manual/en/language.constants.magic.php
//    //__DIR__ The directory of the file. If used inside an include, the directory of the included file is returned
//    //https://www.php.net/manual/en/function.dirname.php
//    //dirname: Returns a parent directory's path 
//
//    $nombre_ruta_fichero = dirname(__DIR__) . '\\' . $parent_folder . '\\' . $nombre_clase . '.php';
//    //Reemplazamos \\ por el separador de directorios dependiente del Sist. Operativo:    
//    $nombre_ruta_fichero = str_replace("\\", DIRECTORY_SEPARATOR, $nombre_ruta_fichero);
//
//    return $nombre_ruta_fichero;
//}
