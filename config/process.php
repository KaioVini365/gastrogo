<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  if(!empty($data)) {

    // Cadastrar usuário
    if($data["type"] === "create") {

      $email = $data["email"];
      $senha = password_hash($data["senha"], PASSWORD_DEFAULT); // criptografa a senha

      $query = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";

      $stmt = $conn->prepare($query);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":senha", $senha);

      try {
        $stmt->execute();
        $_SESSION["msg"] = "Cadastro realizado com sucesso!";
      } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    }

    header("Location:" . $BASE_URL . "index.php");
    exit;
  }

  $conn = null;
