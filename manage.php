<?php
// like django here we write command to create project and app 
// >>startproject <projectname>
// >>startapp <appname>
// >> makemigrations
// >> migrate
include_once("mangoPHP/core/management/commands/startapp.php");
include_once("mangoPHP/core/management/commands/startproject.php");



switch ($argv[1]) 
{
    case "startproject":
        startproject($argv[2]);
        break;
    case "startapp":
        stratapp($argv[2]);
        break;
}

?>