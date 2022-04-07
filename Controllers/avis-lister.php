<?php

require "Models/avis-lister.php";

if (isset($_GET['tri'])) {
    $avis = get_avis($_GET['tri']);
} else {
    $avis = get_avis();
}

require "Views/avis-lister.php";
