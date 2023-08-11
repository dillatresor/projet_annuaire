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
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    
          
             
          
        $query = $db->prepare( 'INSERT INTO apprenants (nom,prenom,adresse,age,telephone,email) VALUES (?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$age,$telephone,$email));

        header('location:apprenants.php')
         
?>