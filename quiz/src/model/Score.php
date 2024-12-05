<?php

class Score
{
    private $id;
    private $pseudo;
    private $score;
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
        return $this;
    }
    public function getScore(){
        return $this->score;
    }
    public function setScore($score){
        $this->score = $score;
        return $this;
    }
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}