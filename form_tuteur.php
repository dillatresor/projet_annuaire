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
    
<div class="m-5">
     <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nom">
    </div>

    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="prenom">
    </div>

    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="adresse">
    </div>

    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="telephone">
    </div>
    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email">
    </div>
    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="fonction">
    </div>
    <div class="mb-6">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="sexe">
    </div>
        
    </div>
    <div class="m-5">
    <div class="d-flex align-items">
    <div class="col-1">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                femme
            </label>
        </div>
    </div>
    <div class="col-1">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                homme
            </label>
        </div>
    </div>
  </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-danger me-md-2" type="button">Ajouter</button>
        <button class="btn btn-danger" type="button">Annuler</button>
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
