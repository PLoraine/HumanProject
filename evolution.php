<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    use Classes\Autoloader;
    use Classes\Personnage;
    use Classes\Partie;
    

    require 'Classes/Autoloader.php';
    Autoloader::register();

    $partie = new Partie;
    $partie->createPartie();

    $personnage = new Personnage(7);

    for($i = 0; $i < 10; $i++) {

        $personnage->registerPersonnage();
    }

    $personnage->registerPartiePerso();

    $partie->statPartie();

    var_dump($partie->statPartie());

?>;