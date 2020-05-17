<?php

$user='root';
$dsn='mysql:host=monsite;dbname=contact;';
$password = "";
$name= $_POST['name'];
$firstname= $_POST['firstname'];
$email=$_POST['email'];
$motdepasse=$_POST['password'];

try {
    $connexion = new PDO($dsn, $user, $password);
    $req="INSERT INTO register (name, firstname, email, password) VALUES (?, ?, ?, ?)";
    $stmt= $connexion->prepare($req);
    $stmt->execute([$name, $firstname, $email, $motdepasse]);
    echo "Ok";
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
