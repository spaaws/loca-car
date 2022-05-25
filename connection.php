<?php
    //Conexão com bando de dados
    function connection(){
//         $servername = "localhost";
//         $username   = "root";
//         $password   = "";
//         $db         = "locadora";
        
        $servername = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username   = "ccrk1ipe9g6gzwdd";
        $password   = "ygqpqbs78glzwk73";
        $db         = "wxa8dxw15yab8254";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão realizada com sucesso!";
        return $conn;

        } catch(PDOException $e) {
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }
?> 
