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
                    <h2>AJOUTER DES APPRENANTS</h2>
                </div>

                <?php 
                                        
                ?>
                
   
   
  
   <div class="m-5 bg-danger"  >
   <form action="insertion_apprenants.php" method="post">
        <div class="row mt-3">
                 <div class="col-5 m-3">
                            <input type="text" class="form-control m-2" placeholder="Nom" name="nom">
                </div>
        <div class="col-5 m-3">
                <input type="text" class="form-control m-2" placeholder="Prenom" name="prenom">
        </div>
         </div>

                <div class="row mt-3">
                          <div class="col-5 m-3">
                                    <input type="date" class="form-control m-2" placeholder="Date de naissance" name="date_naiss">
                          </div>
                          
                          <div class="row col-4 m-3">
                        <div class="col-4">
                                            <label class="text-light" for="">Sexe</label>                                              
                                                <select  name="sexe" id="">
                                                <option value="Masculin">Masculin</option>
                                                <option value="Feminin">Feminin</option>
                                                </select>
                                                
                        </div>
                  
        <div class="col-4">
              <label class="text-light" for="">Tuteur</label>                                              
              
            <?php              
              $bdd= new PDO('mysql:host=localhost;dbname=annuaire','root','');

              $reponse = $bdd->query('SELECT nom, prenom FROM tuteur');
            ?>
           <select name="tuteur">
                <option value="">Choisir...</option>
              <?php while ($d = $reponse->fetch()) { ?>

                <option><?= $d['nom'] ?> <?= $d['prenom'] ?></option>
                <?php } ?>
              
              
            </select>                             
        </div>
                         </div>
                </div>
                            <div class="row mt-3">
                                          
                                  <div class="col-5 m-3">
                                        <input type="text" class="form-control m-2" placeholder=" Ville" name="ville">
                                  </div>
                                  <div class="col-5 m-3">
                                         <input type="number" class="form-control m-2" placeholder="Contact" name="contact">
                                  </div>
                            </div>
                                   
                                          <div class="row">
                                                <div class="row m-2">
                                                        <div class="buttonap ">
                                                            <input id="sendapprenants" type="submit" value="Ajouter" name="ajouter" class="btn btn-light sbouton2 col-2">
                                                            <input id="annuler" type="" value="Annuler" name="annuler" class="btn btn-light sbouton2 col-2">
                                                        </div>
                                                       
                                                         
                                                </div>
                              </form>              
    </div>   
   
        

   
  

    <script type="text/javascript" src="js/navigateur.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js"></script>
    <script type="text/javascript">
        afficher('formulaire');
    </script>
</body>

</html>