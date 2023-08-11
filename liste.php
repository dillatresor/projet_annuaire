<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire tuteurs</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php include 'menu.php';?>
<div class="col-9">
        <h1 id="bienvenu">Liste des Etudiants</h1>
        <div class="table-responsive-sm">
          <table class="table stable table-bordered">
            <thead class="stable">
              <tr  class="stable1" >
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Genre</th>
                <th scope="col">Contact</th>
              </tr>
            </thead>

            <tbody>

              <tr>
              <?php
                try
                {
              
                $sql = bd()->query('SELECT * FROM etudiant ORDER BY nom ASC');
                $i=0;
                  
                while ($donnees = $sql->fetch())
                {
                    $i++;
                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "<td> $donnees[nom] </td>";
                    echo "<td> $donnees[prenom] </td>";
                    echo "<td> $donnees[date_naiss] </td>";
                    echo "<td> $donnees[genre] </td>";
                    echo "<td> $donnees[contact] </td>";
                    echo "</tr>";
                }
                $sql->closeCursor();
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
              ?>
              </tr>
            </tbody>
          </table>
          </div>
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
