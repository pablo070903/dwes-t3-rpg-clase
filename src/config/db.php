<?php

$host = 'db';
$dbname = 'dwes_t3_rpg_clase';
$username = 'user';
$password = 'userpassword';


try{
    
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     

} catch (PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
    exit;
}


