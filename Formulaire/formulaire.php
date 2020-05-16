<?php
try {
$user='root';
$dsn='mysql:127.0.0.1;dbname=contact;port=3308';
$password = "";
$name= $_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$connexion = new PDO($dsn, $user, $password);
$res=$connexion->query("insert into form (name, email, message) values($name, $email, $message)");

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>