<?php


class QuestionController
{

    public function getQuestion( Score $score){
        $bdd = new PDO('mysql:host=localhost;dbname=nuit_info', 'root', '');
        $req=$bdd->prepare("SELECT * FROM question where id_question not in(SELECT ref_question from lier where ref_score = :score) ORDER BY RAND() LIMIT 1;");
        $req->execute(array(
            'score'=>$score->getId()
        ));
        return $req->fetch();
    }
}