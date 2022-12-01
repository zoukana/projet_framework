<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Formulaire</title>

</head>

<body>

  <div class="container my-5">

    <form action="" method="POST" class="row g-3" style="background-color:#D9D9D9" id="loginform" enctype="multipart/form-data">
      <div>
        <h2 class="text-center">FORMULAIRE D'INSCRIPTION</h2>
      </div>
      <div>
<div><p><?= $success ?? null  ?> </p> </div>
<div><p><?= $erreur ?? null  ?> </p> </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Prenom (*)</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="PRENOM">
        <p id="erreurprenom"></p>

      </div>

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nom (*)</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="NOM">
        <p id="erreurNom"></p>

      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Email (*)</label>
        <input type="text" autocomplete="off" class="form-control" id="email" placeholder="Email" name="email">
        <p id="erreuremail"></p>

      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">role (*)</label>
        <select id="role" name="roles" class="form-select">
          <option value="" selected></option>
          <option value="admin" name="roles">administrateur</option>
          <option value="user" name="roles">user_simple</option>
        </select>
        <p id="erreurrole"></p>
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">mot_de_passe*</label>
        <input type="password" name="passwords" class="form-control" id="pwd" placeholder="mot_de_passe">
        <p id="erreurpwd"></p>
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">saisir a nouveau le mot de passe* </label>
        <input type="password" class="form-control" name="password1" id="pwd1" placeholder="mot_de_passe">
        <p id="erreurpwd1"></p>

      </div>
      <div class="col-auto">
        <input type="file" class="form-control" id="photo" name="photo" placeholder="PHOTO" accept=".jpeg, .png, .jpj"> 
      </div>
      <br>
      <div class="col-6">
        <input type="submit" id="submit" name="submit"  class="btn btn-primary" style="background-color:#05006B">
      </div>
      <script src="../connexion/java.js"></script>
    </form>
</body>

</html>