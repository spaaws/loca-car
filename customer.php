<?php
include "connection.php";

$conn = connection();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";;
  $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO customer (nome, email)
  VALUES (:nome, :email)");
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':email', $email);

  // insert a row
  // $nome = "Wellington Feitoza";
  // $email = "well@gmail.com";
  // $stmt->execute();

  if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
  }else {
    echo "Erro ao tentar efetivar cadastro";
  }

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
