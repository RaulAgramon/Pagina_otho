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

<br>
<hr>
<center><p class="TxtI"></p></center>

<form  method="POST" action="PAGINA5PH.php">
    <div id="login-box">
        <h1>Registrarse</h1>

        <div class="form">
            <div class="item"> 
               
                <input required type="text" placeholder="Usuario" name="Usuario">
            </div>

            <div class="item"> 
                <i></i> 
                <input required type="password" placeholder="Contraseña" name="Contraseña">
            </div>
		
            <div class="item"> 
                <i></i> 
                <input required type="email" placeholder="Email" name="Correo">
            </div>

        </div>
        
        <button type="submit" name="insert" >Registrarse</button>
    </div>
</form>

</body>
</html>