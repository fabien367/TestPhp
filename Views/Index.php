<?php
include_once("../Logs/Logger.php");
require_once("../Services/MusiciensServices.php");

echo("coucou test");
$test= new Musiciens();
console_log($test->GetMusiciens());
?>