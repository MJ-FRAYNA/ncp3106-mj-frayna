<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";


try{
    $conn = new PDO("mysql:host=$servername;fraynadatabase=accountRegistraiton",$db_username = "root", $db_password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";

}catch (PDOException $e){
    echo "Connection failed:" .$e->getMessage();
}

?>