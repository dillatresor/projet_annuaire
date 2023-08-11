<?php



try{
$db = new PDO('mysql:host=localhost;dbname=bd_app', 'root', '');
 
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
   
             
          
        $query = $db->prepare( 'INSERT INTO tuteurs (nom,prenom,adresse,telephone,email,fontion) VALUES (?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$telephone,$email,$fonction,));

        header('location:tuteurs.php')
         
?>