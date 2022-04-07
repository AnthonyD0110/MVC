<?php

require "Models/avis-ajouter.php";

$departement = 'departement';
$promo = 'promo';
$module = 'module';
$note = 'note';
$commentaire = 'commentaire';
$etudiant = 'etudiant';

$valueDepartement = null;
$valuePromo = null;
$valueModule = null;
$valueNote = null;
$valueCommentaire = null;
$valueEtudiant = null;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require "Views/avis-ajouter.php";
} else {
    if (
        check_string($_POST[$departement]) == 1
        || check_string($_POST[$promo]) == 1
        || check_string($_POST[$module]) == 1
        || check_string($_POST[$note]) == 1
        || check_string($_POST[$commentaire]) == 1
        || check_string($_POST[$etudiant]) == 1
        || check_string($_POST[$commentaire], 0, 300) == 3
        || $_POST[$note] < 1
        || $_POST[$note] > 5
    ) {
        $code_error = 4;
        require "Views/error.php";
        $valueDepartement = $_POST[$departement];
        $valuePromo = $_POST[$promo];
        $valueModule = $_POST[$module];
        $valueNote = $_POST[$note];
        $valueCommentaire = $_POST[$commentaire];
        $valueEtudiant = $_POST[$etudiant];
        require "Views/avis-ajouter.php";
    } else {
        add_avis($departement, $promo, $module, $note, $commentaire, $etudiant);
        header("Location: index.php?controller=avis-lister");
    }
}
