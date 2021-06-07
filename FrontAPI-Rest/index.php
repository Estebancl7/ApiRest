<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>API REST</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
      </li>
      
      
    </ul>
  </div>
</nav>

<div class="container">
   
   <img class="rounded mx-auto d-block"src="img/TITULO.png" alt="GRupo_imagen" style="width: 400px;">
   <h3 class="text-center mb-4">Trabajo N°1 Redes y Comunicacion de Datos</h3>
   <p class="text-center">Mediante esta Pagina web se aplicaran los metodos de ingresar el nombre completo (Nombres y Apellidos) y el Calculo del Digito Verificador en formato Chileno, los cuales seran consumidos mediante un API Rest desarrollada con Javascript con su framework Express</p>
   <h4 class="text-center mb-4">¡Elija el metodo que desea probar!</h4>
</div>

<div class="container">
<div class="row mx-5">
            <div class="col d-flex justify-content-center">
                <a href="nombre.php" type="button" class="btn btn-info btn-lg" style="justify-content: center;">Nombre Completo</a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="rut.php" type="button" class="btn btn-info btn-lg" style="justify-content: center;">Digito Verificador</a>
            </div>       
</div>



</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>