<?php
    //Array de archivos y directorios
    chdir('c:/xampp/htdocs');
    $directorio="misPHP";
    $archivos=scandir($directorio, 1);
    print_r($archivos);
    /*
    SCANDIR_SORT_ASCENDING (0)
    SCANDIR_SORT_DESCENDING (1)
    SCANDIR_SORT_NONE (sin orden)
     */
?>