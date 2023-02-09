<?php

//Create mango project


function startproject($projectName)
{
    mkdir($projectName);

    $settingsFile = fopen("$projectName/settings.php", "w");
    $viewsFile    = fopen("$projectName/views.php", "w");
    $urlsFile     = fopen("$projectName/urls.php", "w");
}

?>