<?php
include_once('Connection.php');
class Musiciens extends ConnectionBase
{
    public function GetMusiciens()
    {
         $connect = parent::get_Bdd();
    //  $connect=$this->bdd;
        
        $sql = 'SELECT * FROM `musiciens`';
        $consult = $connect-> prepare($sql);
        $consult->execute();
        $donnees=$consult->fetchAll();
        foreach ($donnees[0] as $arr ) {
            var_dump($arr);
        }
       echo(json_encode($donnees));
        return $donnees;
    }
}
?>COuocu