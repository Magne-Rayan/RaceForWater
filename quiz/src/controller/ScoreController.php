<?php

namespace App\Http\Controllers;

use Bdd;

include '../bdd/Bdd.php';

class ScoreController
{
    public function start()
    {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare("INSERT INTO score (pseudo, score) VALUES(:pseudo, :score)");
        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'score' => 0,
        ));
        header('location:/quiz/vue/quizRaceForWater.php');
    }
}
