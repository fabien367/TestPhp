<?php
class ConnectionBase
{
    private $bdd;
    public function __construct() 
    {
        // test de ma brance
         $this->bdd = new PDO('mysql:host=localhost;dbname=concert', 'root', '');
    }
  
    public function get_Bdd()
    {
        return $this->bdd;
    }
}
?>
