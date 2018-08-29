<?php

namespace Classes;

use Classes\Database;

/**
 * class Partie
 * 
 * Permet de créer une partie 
 */
class Partie {

    private $_datePartie;

    public function __construct()
    {
        $this->_datePartie = date('Y-m-d H:i:s');
    }

    public function createPartie(){

        $pdo = new Database;

        $connect = $pdo->getPdo();

        $insert = $connect->prepare('INSERT INTO partie (date_partie) VALUES (?)');
        $insert->bindParam(1, $this->_datePartie);

        $insert->execute();
        
    }
    public function statPartie()
    {
        $pdo = new Database();

        $connect = $pdo->getPdo();

        $select = $connect->prepare('SELECT id_partie FROM partie WHERE date_partie = ?');
        $select->bindParam(1, $this->_datePartie);
        $select->execute();
        $result = $select->fetch();
        $id_partie = $result[0];

        $selectStats = $connect->prepare("SELECT (SELECT COUNT(id_perso) FROM partie_perso WHERE id_partie = ?), AVG(lifespan) AS lifespan, AVG(growth) AS growth, AVG(birthsize) AS birthsize FROM personnage INNER JOIN partie_perso ON personnage.id_perso= partie_perso.id_perso");
        $selectStats->bindParam(1, $id_partie);
        $selectStats->execute();
        $recup = $selectStats->fetch();
        $array= [];
        $array['lifespan'] = round($recup['lifespan'],2);
        $array['growth']= round($recup['growth'],2);
        $array['birthsize'] = round($recup['birthsize'],2);

        return $array;

    }


}

