<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$database='slider';

   

    $connection  = new mysqli($server_name,$user_name,$password,$database);
    if($connection->connect_errno){
        die('Something went wrong'.$connection->connect_error);
    }
   

