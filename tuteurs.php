<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tuteurs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
        <?php
                require_once 'menu.php';
        ?>

    <div class="text-center">
        <h2>LISTE DES TUTEURS</h2>
    </div>

    <div class="m-5">
        <table class="table">
            <thead class="bg-danger text-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                try
                {
              
                $sql = bd()->query('SELECT * FROM tuteur ORDER BY nom ASC');
                $i=0;
                  
                while ($donnees = $sql->fetch())
                {
                    $i++;
                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "<td> $donnees[nom] </td>";
                    echo "<td> $donnees[prenom] </td>";
                    echo "<td> $donnees[date_de_naissance] </td>";
                    echo "<td> $donnees[sexe] </td>";
                    echo "<td> $donnees[ville] </td>";
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
    
    
    <div class="text-center">
        <a class="btn btn-danger" href="ajout_tuteurs.php" role="button">Ajouter tuteurs</a>
    </div>



    <!-- FOOTER CHANCELLA & BERYSE-->
   
   <div class="m-5 text-center text-light bg-danger" height: 55px;>
        <h2>COPYRIGHT SIMPLON 2023</h2>
    </div>
  

    <script type="text/javascript" src="js/navigateur.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js"></script>
    <script type="text/javascript">
        afficher('formulaire');
    </script>
</body>

</html>