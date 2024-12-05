<?php

include '../model/score.php';
include '../controller/ScoreController.php';

if (array_key_exists("inscription", $_POST)) {

}

if (array_key_exists("connexion", $_POST)) {
    $score = new Score([
        "pseudo" => $_POST["pseudo"],
    ]);
    $controller = new \ScoreController();
    $controller->start($score);
}
