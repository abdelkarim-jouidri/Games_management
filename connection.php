<?php
    $dbhost = 'localhost'; 
    $dbname = 'gamesmanagement'; 
    $dbuser = 'root';
    $dbpass = '';

    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $connexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    //CHECK FOR THE STATE OF THE CONNECTION
    if(!$connexion) echo "failed connection";



?>