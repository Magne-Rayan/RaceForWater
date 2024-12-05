<?php


class ReponseController
{
    public function getReponse(int $id){
        $bdd = new PDO('mysql:host=localhost;dbname=nuit_info', 'root', '');
        $req=$bdd->prepare("SELECT * FROM reponse WHERE ref_question=:question");
        $req->execute(array(
            'question'=>$id
        ));
        return $req;
    }
}