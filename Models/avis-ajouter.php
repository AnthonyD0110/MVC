<?php

function add_avis($departement, $promo, $module, $note, $commentaire, $etudiant)
{

    require "Models/connect-db.php";
    $request = $PDO->prepare("INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) VALUES(:departement,:promo,:module,:note,:commentaire,:etudiant)");
    $request->bindParam(':departement', $_POST[$departement]);
    $request->bindParam(':promo', $_POST[$promo]);
    $request->bindParam(':module', $_POST[$module]);
    $request->bindParam(':note', $_POST[$note]);
    $request->bindParam(':commentaire', $_POST[$commentaire]);
    $request->bindParam(':etudiant', $_POST[$etudiant]);
    $response = $request->execute();


    if ($response) {
        return 0;
    } else {
        $code_error = 3;
        require "Views/error.php";
    }
}
