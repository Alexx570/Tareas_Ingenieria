<?php 
$data =$this->Usuarios->verusuarios();
?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Usuarios</title>
<link rel="stylesheet" href="<?php echo base_url("CIDE/bootstrap/css/bootstrap.min.css");?>"/>
	<link rel="stylesheet" href="<?php echo base_url("CIDE/bootstrap/css/datepicker3.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("CIDE/bootstrap/css/styles.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("CIDE/bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
	<script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>


</head>
<body>
<table class= "table table-striped">
<center>
    <h1>
        RxEasyL
    </h1>
    <h3>
    Admins registrados
    </h3>
</center>
    
    
  <tr>
    <th>ID</th>
    <th>Nombre</th> 
    <th>Correo</th>
    <th>Pass1</th>
  </tr>
  <tr>
      <?php
      foreach($data as $fila)
      {
      ?>
      <tr>
          <td class="from"><?=$fila['ID'];?></td>
          <td class="from"><?=$fila['username'];?></td>
          <td class="from"><?=$fila['password'];?></td>
          
      </tr>
    
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
  </tr>
<?php
      }
?>
</table>
</div>
</div>

</body>
</html>