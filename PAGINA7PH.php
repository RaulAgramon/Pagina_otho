<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Cuidado con el perro</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body background="img/PCCEP.png">
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1><img class="Log" src="img/logo1.png" width="160px" height="80px"></h1>
			</div>
			
			
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
		<a href="Index.html">Inicio</a>
			<a href="PAGINA1.html">Ropa Hombre</a>
			
			<a href="PAGINA5.php">Regristrarse</a>
			<a href="PAGINA6.php">Cancelar registro</a>
            <a href="PAGINA7.php">Consultar registro</a>
	
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<?php

//CONEXION A LA BD(localhost:puerto, 'usuario', 'password','base de datos')
$conexion = new mysqli('localhost:3306', 'root', '', 'bd_cuidadoconelperro');
$conexion->set_charset("utf8");
//Busca el nombre y obtiene la informacion de la tabla alumnos de la base de datos 
$registros= $conexion->query("select Usuario,Contraseña, Correo from registros where Usuario='$_REQUEST[Usuario]'");

if($reg=mysqli_fetch_array($registros))
{
/* AQUI ESTAMOS COMBINANDDO HTML con PHP*/
    ?>  
  <form  method="POST" action="PAGINA7PHF.php">
    <div id="login-box">
        <h1>Escribe los datos nuevos</h1>

        <div class="form">
            <div class="item"> 
               
                <input required type="text" placeholder="Usuario" name="Usuario" value = '<?php echo $reg[0]; ?>'/>
            </div>

            <div class="item"> 
                <i></i> 
                <input required type="text" placeholder="Contraseña" name="Contraseña" value = '<?php echo $reg[1]; ?>'/>
            </div>
		
            <div class="item"> 
                <i></i> 
                <input required type="email" placeholder="Email" name="Correo" value = '<?php echo $reg[2]; ?>'/>
            </div>

        </div>
        
        <button type="submit" name="insert" >Cambiar datos</button>
    </div>
</form>
<?php
 }
 else
 {?>
 <div id="login-boxT">
 <h1 class="TxtP5"> <?php echo "No existe usuario con ese nombre";?></h1>
 </div>
     <?php
 }
$conexion->close();
?>






</body>
</html>