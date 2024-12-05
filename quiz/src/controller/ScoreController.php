<?php

include '../bdd/Bdd.php';

class ScoreController
{
    public function start(Score $score)
    {
        $bdd = new \Bdd();
        $req = $bdd->getBdd()->prepare("INSERT INTO score (pseudo, score) VALUES(:pseudo, :score)");
            $req->execute(array(
                'pseudo' => $score->getPseudo(),
                'score' => 0,
        ));
        $requet = $bdd->getBdd()->prepare("SELECT * FROM score WHERE pseudo = :pseudo");
        $requet->execute([
            'pseudo' => $score->getPseudo()
        ]);
        $result = $req->fetch();
        session_start();
        $score->setId($result['id_score']);
        $score->setscore($result['score']);
        $_SESSION['score'] = $score;
        header('location:/quiz/vue/quizRaceForWater.php');
    }
}
