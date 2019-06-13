<?php 

/* 
    Código fuente desarrollado por UTERRA.COM 

    Visita mi web  

        www.uterra.com 
*/ 

include('abre_db.php'); 

// Configurar las dos lineas siguientes 

$nombre = $_POST["nombre"]; 
$email = $_POST["email"]; 
$fecha = date("Y-m-d"); 

// Inicio de validacion 

// Fin de la validacion 

// Comprobamos si el usuario esta registrado 

$nuevo_usuario=mysql_query("select nombre from $tabla where nombre='$nombre'"); 
if(mysql_num_rows($nuevo_usuario)>0) 
{ 
echo " 
<p class='avisos'>El nombre de usuario ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 
// ============================================== 
// Comprobamos si el email esta registrado 

$nuevo_email=mysql_query("select email from $tabla where email='$email'"); 
if(mysql_num_rows($nuevo_email)>0) 
{ 
echo " 
<p class='avisos'>La direccion de e-mail ya esta registrada</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
} 
// ------------ Si no esta registrado el e-mail continua el script 
else 
{ 
$result = mysql_db_query("$base_datos","insert into $tabla (nombre,email,fecha) values ('$nombre','$email','$fecha')");  

include('cierra_db.php'); 

// Confirmamos que el registro ha sido insertado con exito 

echo " 
<p class='avisos'>Registro insertado con exito</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}  
// ============================================== 
}  
?>