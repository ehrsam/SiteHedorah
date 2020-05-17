<?php

$user='root';
$dsn='mysql:host=monsite;dbname=contact;';
$password = "";
$name= $_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

try {
    $connexion = new PDO($dsn, $user, $password);
    $req="INSERT INTO form (name, email, message) VALUES (?, ?, ?)";
    $stmt= $connexion->prepare($req);
    $stmt->execute([$name, $email, $message]);
    echo "Ok";
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
ini_set('SMTP','smtp.orange.fr');
ini_set("sendmail_from",$_POST['email']);
    $retour = mail('ehrsammathieu1@gmail.com', $_POST['message'], 'From : '.$_POST['email']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }

?>

