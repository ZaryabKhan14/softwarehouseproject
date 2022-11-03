<?php
define("databaseinfo","mysql:host=localhost,dbname=softwarehouse");
define("dbuser","root");
define("dbpswd","");

function perform($query){
$connection = new PDO(databaseinfo,dbuser,dbpswd);
$next = $connection->prepare($query);
if ($next->execute()) {
    return TRUE;
}
else{
    return FALSE; 
}
}

function fetchAll($query){
    $con = new PDO(databaseinfo, dbuser, dbpswd);
    $next = $connection->query($query);
    return $next->fetchAll();
}
?>