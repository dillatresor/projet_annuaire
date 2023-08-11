<?php
try{
$db = new PDO('mysql:host=localhost;dbname=annuaire', 'root', '');
 
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
     
}
     
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $fonction = $_POST['fonction'];
    $sexe = $_POST['sexe'];
              
             
          
        $query = $db->prepare( 'INSERT INTO tuteurs (nom,prenom,adresse,telephone,email,fontion,sexe) VALUES (?,?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$email,$telephone,$sexe));

        header('location:form_tuteur.php')
         
?>