<?php
$controller = "";
?>

</DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <title><?php if (isset($title)) echo $title; ?></title>
    <?php
    if (file_exists("Controllers/" . $controller . ".php"))
        echo "<link rel='stylesheet' href='css/'.$controller.'.css' type='text/css'>";
    ?>
</head>

<body>
    <?= $content ?>
</body>

</html>