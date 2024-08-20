<?php
session_start();
include_once("connection.php");

$username = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$userEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$userPassword = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

$hashedPassword = hash('sha256', $userPassword);

$insertUserQuery = "INSERT INTO users (name, email, password) VALUES ('$username', '$userEmail', '$hashedPassword')";
$insertUserResult = mysqli_query($connection, $insertUserQuery);

if (mysqli_insert_id($connection)) {
    $_SESSION['msg'] = "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro não realizado!</p>";
    header("Location: index.php");
}
?>
