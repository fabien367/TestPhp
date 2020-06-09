<?php
class ConnectionBase
{
    private $bdd;
    public function __construct() 
    { //Coucou Commentaire
         $this->bdd = new PDO('mysql:host=localhost;dbname=concert', 'root', '');
    }
  
    public function get_Bdd()
    {
        return $this->bdd;
    }
}
?>