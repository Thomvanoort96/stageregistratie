<?php
/**
 * Created by PhpStorm.
 * User: Thomv
 * Date: 12/19/2016
 * Time: 2:06 PM
 */
    try{
        $conn = new PDO('mysql:host=localhost;dbname=stageregistratie', 'root', '');
    }catch(PDOException $e){
        echo "Fout in databaseafhandeling: ".$e->getMessage();
        die();
    }

?>