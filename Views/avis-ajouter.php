<?php

$contentForm = label('name', $departement) . newline() . input($departement, $valueDepartement) . newline();
$contentForm .= label('name', $promo) . newline() . input($promo, $valuePromo) . newline();
$contentForm .= label('name', $module) . newline() . input($module, $valueModule) . newline();
$contentForm .= label('name', $note) . newline() . input($note, $valueNote) . newline();
$contentForm .= label('name', $commentaire) . newline() . input($commentaire, $valueCommentaire) . newline();
$contentForm .= label('name', $etudiant) . newline() . input($etudiant, $valueEtudiant) . newline();

$content = center(form($contentForm . submit('submit'), "index.php?controller=avis-ajouter"));


require "Views/gabarit.php";
