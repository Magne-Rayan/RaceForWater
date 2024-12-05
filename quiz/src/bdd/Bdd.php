<?php
class Bdd{
    private $bdd;
    public function __construct(){
        $this->bdd=new PDO('mysql:host=localhost;dbname=nuit_info; charset=utf8', 'root', '');
    }

    /**
     * @return PDO
     */
    public function getBdd()
    {
        return $this->bdd;
    }

}