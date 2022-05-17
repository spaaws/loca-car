<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loca-Car Cariri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1 style="text-align: center; padding-top: 65px; padding-bottom: 50px;">Loca-Car Cariri</h1>
  <div class="container">
    <form name="customer" id="customer" method="POST" enctype="multipart/form-data" action="add-customer.php">
      <div class="form-group">
        <label for="exampleInputPassword1">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>