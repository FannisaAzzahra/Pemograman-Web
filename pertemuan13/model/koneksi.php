<?php 
    $username = 'root'; // kalau berhasil, kosong
    $password = '';
    $database = 'db_survey';
    try{
        $db = new mysqli('localhost', $username, $password, $database);
        if($db->connect_error){
            die('Connection failed: ' . $db->connect_error);
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
?>