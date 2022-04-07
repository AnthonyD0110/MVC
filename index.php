<?php

require "tags.lib.php";

require "check.lib.php";

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (file_exists("Controllers/" . $controller . ".php"))
        require("Controllers/" . $controller . ".php");
    else {
        $code_error = 1;
        require "Views/error.php";
    }
} else {
    $code_error = 0;
    require "Views/error.php";
}
