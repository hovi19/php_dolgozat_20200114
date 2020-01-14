<?php require_once 'Application/Core/add.php'?>
<?php require_once 'Application/functions.php'?>
<?php
/**
 * Adatok definiálása
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Képek</title>
    <link href="Application/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="">Képek</div>
        <hr>
        <ul>
            <li><a href="index.php?action=main">Home</a></li>
            <li><a href="index.php?action=add">Upload</a></li>
        </ul>
    </aside>
    <main id="main-content">
        <?php
            switch(@$_GET['action'])
            {
                case 'main':include_once 'Application/main.php'; break;
                case 'add': include_once 'Application/add.php'; break;
            }
        ?>
    </main>

</body>
</html>