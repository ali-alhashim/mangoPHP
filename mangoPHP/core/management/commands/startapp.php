<?php
//"Creates a Mango app directory structure for the given app name in "


function stratapp($appName)
{
    mkdir($appName);

    $viewsFile    = fopen("$appName/views.php", "w");
    $modelFile    = fopen("$appName/models.php", "w");
}


?>