<?php
class Connection{
    function getConnection(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "cheapstay"; // name of your database

        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (PDOException $e){
            echo "Error while connecting database : " . $e->getMessage();
        }
    }
}