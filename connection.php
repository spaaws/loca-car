<?php
    //Conexão com bando de dados
    function connection(){
        $servername = getenv('HOST');
        $username   = getenv('USERNAME');
        $password   = getenv('PASSWORD');
        $db         = getenv('DATABASE');

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
