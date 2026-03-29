<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;
  $type = $data["type"] ?? $_GET["type"] ?? "";

  // ─── CREATE — Cadastrar usuário ───────────────────────────────────────────
  if($type === "create") {

    $email = $data["email"];
    $senha = password_hash($data["senha"], PASSWORD_DEFAULT);

    try {
      $stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":senha", $senha);
      $stmt->execute();
      $_SESSION["msg"] = "Cadastro realizado com sucesso! Faça login.";
      header("Location: " . $BASE_URL . "login.php");

    } catch(PDOException $e) {
      // E-mail já cadastrado (UNIQUE)
      $_SESSION["msg"] = "Este e-mail já está cadastrado.";
      header("Location: " . $BASE_URL . "create.php");
    }
    exit;

  // ─── READ — Login ─────────────────────────────────────────────────────────
  } elseif($type === "login") {

    $email = $data["email"];
    $senha = $data["senha"];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if($usuario && password_verify($senha, $usuario["senha"])) {
      $_SESSION["usuario_id"]    = $usuario["id"];
      $_SESSION["usuario_email"] = $usuario["email"];
      header("Location: " . $BASE_URL . "index.php");
    } else {
      $_SESSION["msg"] = "E-mail ou senha incorretos.";
      header("Location: " . $BASE_URL . "login.php");
    }
    exit;

  // ─── UPDATE — Editar perfil ───────────────────────────────────────────────
  } elseif($type === "editar") {

    if(!isset($_SESSION["usuario_id"])) {
      header("Location: " . $BASE_URL . "login.php");
      exit;
    }

    $id    = $_SESSION["usuario_id"];
    $email = $data["email"];

    try {
      // Se digitou nova senha, atualiza também; senão mantém a atual
      if(!empty($data["senha"])) {
        $senha = password_hash($data["senha"], PASSWORD_DEFAULT);
        $stmt  = $conn->prepare("UPDATE usuarios SET email = :email, senha = :senha WHERE id = :id");
        $stmt->bindParam(":senha", $senha);
      } else {
        $stmt = $conn->prepare("UPDATE usuarios SET email = :email WHERE id = :id");
      }

      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":id", $id);
      $stmt->execute();

      $_SESSION["usuario_email"] = $email;
      $_SESSION["msg"] = "Perfil atualizado com sucesso!";

    } catch(PDOException $e) {
      $_SESSION["msg"] = "Este e-mail já está em uso por outra conta.";
    }

    header("Location: " . $BASE_URL . "perfil.php");
    exit;

  // ─── DELETE — Excluir conta ───────────────────────────────────────────────
  } elseif($type === "deletar") {

    if(!isset($_SESSION["usuario_id"])) {
      header("Location: " . $BASE_URL . "login.php");
      exit;
    }

    $id = $_SESSION["usuario_id"];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    // Encerra a sessão após deletar
    session_destroy();
    header("Location: " . $BASE_URL . "index.php");
    exit;

  // ─── LOGOUT ───────────────────────────────────────────────────────────────
  } elseif($type === "logout") {

    session_destroy();
    header("Location: " . $BASE_URL . "index.php");
    exit;

  }

  $conn = null;
