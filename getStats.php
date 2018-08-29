<?php

include 'Classes/Partie.php';
use Classes\Partie;

getStats();

function getStats(){
    // $stat = new Partie;
    // $stat->statPartie();
    $stat=array("a"=>1, "b"=>2,"c"=>3);// test
    echo json_encode($stat);
}


?>;