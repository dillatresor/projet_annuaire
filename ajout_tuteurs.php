<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> formulaire tuteurs</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php include 'menu.php';?>
    <div class="m-5">
<form class="row g-3 bg-danger">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputEmail4" name="nom">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="inputPassword4" name="prenom">
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="daten">
  </div>
 
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Sexe</label>
    <select id="inputState" class="form-select" name="sexe">
    <option>Masculin</option>
      <option>Feminin</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Contact</label>
    <input type="number" class="form-control" id="inputPassword4" name="contact">
  </div>
  <div class="col-12">
                    <button type="submit" class="btn btn-light" id="sendapprenants" type="submit" value="Ajouter" name="ajouter" onclick='return confirmation()'>Enregistrer</button>
                    <button type="submit" class="btn btn-light" id="annuler" type="" value="Annuler" name="annuler">Annuler</button>
                </div>
</form>

    

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