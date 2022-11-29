
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<body>

<form action="/connecxion" methode="post" class="container" style="margin-top:30px;" >
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">EMAIL</label>
    <input type="text" class="form-control" name="email" id="EMAIL" placeholder="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">PASSWORD</label>
    <input type="password" class="form-control" name="mot_pass" id="password" placeholder="mot de passe">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>