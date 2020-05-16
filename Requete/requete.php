<?php
$user='root';
$nomdb='contact';
$dsn='mysql:dbname=contact;host=localhost';
$req = "select * from contact;"; 
$connexion = new PDO($dsn, $user, "");
$res=$connexion->query($req);

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<div class="Accueil">

        <p>Réservations</p>

</div>

<table width="100%" cellspacing="1" cellpadding="1" class="bordure" border="5">
            <tr>
                <td>Civilité</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
                <td>Calendrier</td>
                <td>Horaire</td>
                <td>Couverts</td>
                <td>Message </td>
                <td>Allergie</td>
                <td>Chien</td>
                <td>Chat</td>
                <td>UrlImage</td>
            </tr>


<?php
$var = " ";
while($ligne=$res->fetch()){
    
    $var.="<tr>";
    $var .="<td>".$ligne['Civilite']."</td>";
    $var .="<td>".$ligne['Nom']."</td>";
    $var .="<td>".$ligne['Prenom']."</td>";
    $var .="<td>".$ligne['Email']."</td>";
    $var .="<td>".$ligne['Calendrier']."</td>";
    $var .="<td>".$ligne['Horaire']."</td>";
    $var .="<td>".$ligne['Couverts']."</td>";
    $var .="<td>".$ligne['Message']."</td>";
    $var .="<td>".$ligne['Allergie']."</td>";
    $var .="<td>".$ligne['Chien']."</td>";
    $var .="<td>".$ligne['Chat']."</td>";
    $var .="<td>"."<img src=".$ligne['UrlImage']."  width=100></td>";
    $var.="</tr>";
    
    }echo $var;
    ?>
    </table>
</div>

<button type="button" style=" cursor:pointer; border:solid 10px black;"
onclick="self.location.href='index.php'"> 
  <img src="img/home (1)" width=30  alt="home" /> 
</button> 

<button type="button" style=" cursor:pointer; border:solid 10px black;"
onclick="self.location.href='logout.php'"> 
  <img src="img/annul" width=50  height=30 alt="annulation" /> 
</button> 

</body>
</html>

