<?php 
    // Fonction qui permet de saisir le lien et avec le titre pour dinamiser notre navbar
    function navDinamique(string $lien, string $titre) : string{
        $class = 'nav-link';
        if($_SERVER['SCRIPT_NAME'] === $lien){
            $class .= ' active';
        }

        $html = "<li class='nav-item'>
                    <a class='$class' href='$lien'>$titre</a>
                </li>";
        return $html;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(isset($titre)) : ?>
            <?= $titre ?>
        <?php else : ?>
            <?= 'Mon site' ?>
        <?php endif ?>
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Icon web/css/all.css">
</head>

<body class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mon Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?= navDinamique('/index.php', 'Acceuil')?>
                </ul>
            </div>
        </div>
    </nav>

<script src="js/bootstrap.js"></script>
</body>
</html>