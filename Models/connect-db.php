<?php

require "Config/config-db.php";

try {
    $PDO = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASSWORD);
} catch (PDOException $e) {
    $code_error = 2;
    require "Views/error.php";
}
