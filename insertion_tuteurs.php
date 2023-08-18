<?php
require_once 'connexion.php';

$serveur = "localhost";
$dbname = "annuaire";
$user = "root";
$pass = "";


try{
    //Connexion à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header('location:tuteurs.php');
}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

if(isset($_POST['ajouter']))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naiss = $_POST["date_naiss"];
    $sexe = $_POST["sexe"];
    $ville = $_POST["ville"];
    $contact = $_POST["contact"];
   

    $inserer_tuteurs = $dbco->prepare("INSERT INTO tuteur(nom, prenom, date_de_naissance, sexe, ville, contact)
                                        VALUES(:nom, :prenom, :date_naiss, :sexe, :ville, :contact)");

    $inserer_tuteurs->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naiss' => $date_naiss,
        'sexe' => $sexe,
        'ville' => $ville,
        'contact' => $contact
    ));
}

?>


