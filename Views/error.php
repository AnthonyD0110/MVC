<?php

require "Config/config.php";

if ($PROD) {
    $content = "Problème detecté, merci de contacter l'administrateur" . $WEB_MASTER;
} else {
    $content = $ERROR_MESS[$code_error];
}


require "Views/gabarit.php";
