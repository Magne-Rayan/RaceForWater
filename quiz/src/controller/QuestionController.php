<?php

namespace controller;
use Bdd;

include '../bdd/Bdd.php';
class QuestionController
{

    public function getQuestion(){
        $bdd = new Bdd();
        $req=$bdd->getBdd()->prepare("SELECT * FROM question");
        $req->execute();
        $questions = $req->fetch();
        return $questions;
    }
}