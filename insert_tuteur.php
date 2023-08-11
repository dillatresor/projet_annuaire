<?php
require_once 'connexion.php';

$serveur = "localhost";
$dbname = "bd_app";
$user = "root";
$pass = "";


try{
  
    $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch(PDOException $e){
   
}

if(isset($_POST['inserer']))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $fonction = $_POST["fonction"];
   

    $inserer_tuteurs = $db->prepare("INSERT INTO tuteurs(nom, prenom, adresse, telephone, fonction)
                                        VALUES(:nom, :prenom, :adresse, :telephone, :fonction)");

    $inserer_tuteurs->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'telephone' => $telephone,
        'fonction' => $fonction,
        
    ));
}

?>