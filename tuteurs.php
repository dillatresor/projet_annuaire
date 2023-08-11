<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tuteurs</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <?php include 'menu.php'; ?>
  <div>
    <a class="btn btn-danger m-5" href="form_tuteur.php">Ajouter tuteurs</a>
  </div>

  </section>
  <div class="text-center bg-danger m-5">
    <h2>LISTE DES TUTEURS</h2>
  </div>
  <div class="text-center bg-danger m-5 ">

    <table class="table table-bordered">
    <?php
   $bdd= new PDO('mysql:host=localhost;dbname=bd_app','root','');
   
   $reponse = $bdd->query('SELECT * FROM tuteurs');

   echo" <tbody>
          <tr>
            <td>nom</td>
            <td>prenom</td>
            <td>adresse</td>
            <td>telephone</td>
            <td>email</td>
            <td>fonction</td>
           
          </tr>
        </tbody> 
        ";

   while($donnes = $reponse->fetch())
   {
    echo"
      <tr>
      <td>".$donnes['nom']."</td>
      <td>".$donnes['prenom']."</td>
      <td>".$donnes['adresse']."</td>
      <td>".$donnes['telephone']."</td>
      <td>".$donnes['email']."</td>
      <td>".$donnes['fonction']."</td>
      
    </tr>
    ";
}


?>
    </table>
    </section>

    
        
        
       
        </th>
      </thead>
    </table>
  </div>
  </div>



  <?php include 'footer.php'; ?>
  <script type="text/javascript" src="js/navigateur.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/details.js"></script>
  <script type="text/javascript">
  </script>

</body>

</html>