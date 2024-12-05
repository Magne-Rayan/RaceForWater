<?php

include '../model/score.php';
include '../controller/ScoreController.php';

if (array_key_exists("soumettre", $_POST)) {
    $score = new ScoreController();
    foreach ($_POST["soumettre"] as $reponse) {
        $score->corection($reponse);
    }
    $bdd = new \Bdd();
    $req = $bdd->getBdd()->prepare("Update score set score = score+1  where id_score = :id");
    $req->execute(array(
        'correction' => $_SESSION["score"]->getId()
    ));
}

if (array_key_exists("connexion", $_POST)) {
    $score = new Score([
        "pseudo" => $_POST["pseudo"],
    ]);
    $controller = new \ScoreController();
    $controller->start($score);
}
