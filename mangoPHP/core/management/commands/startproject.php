<?php

//Create mango project


function startproject($projectName)
{
    mkdir($projectName);

    $settingsFile = fopen("$projectName/settings.php", "w");
}

?>