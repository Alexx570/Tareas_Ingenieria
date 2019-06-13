<!DOCTYPE html>
<html lang="es">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Editar</title>
</head>
<br>
<br>
<body>

<div class="container fluid ">
    <div class="class row justify-content-center align-items-center">
        <div class="global-container">
            <div class="card-body">
            <h3 class="card-title text-center">Editar datos</h3>
<div class="col-lg-4 col-lg-offset-4 col-xs-12">
<form action="<?php echo base_url();?>index.php/Inicio/editarusuarios" method="POST">

            
                
  <div class="form-group">
  <label for="text">ID</label>
    <input type="text" class="form-control" name="ID">
  </div>
  <div class="form-group">
    <label for="text">Nombre:</label>
    <input type="text" class="form-control" name="Nombre">
    </div>
    <div class="form-group">
    <label for="text">Apellido Paterno:</label>
    <input type="text" class="form-control" name="Ap_Paterno">
  </div>
  <div class="form-group">
    <label for="text">Apellido Materno:</label>
    <input type="text" class="form-control" name="Ap_Materno">
  </div>
  </div>
  <input type="submit" name="Guardar" value="Guardar" href="usuarios">
 
  </div>
  </div>
  </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
