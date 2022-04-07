<?php


function get_avis($tri = "id")
{

    require "Models/connect-db.php";
    $request = $PDO->prepare("SELECT * FROM avis ORDER BY $tri");
    $request->execute();
    $response = $request->fetchAll(PDO::FETCH_ASSOC);

    return $response;
}
