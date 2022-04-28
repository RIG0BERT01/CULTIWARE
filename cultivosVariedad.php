<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cultivos</title>
	<link rel="shortcut icon" href="images/LOGO CULTIWARE.jpg" type="image/x-icon" />
    <title >SIICT CULTIWARE</title>
	
	<link rel="stylesheet" href="estilosdash.css">
	<link rel="stylesheet" href="cultivoVariedad.css">
	<script src="https://kit.fontawesome.com/32a9480e06.js" crossorigin="anonymous"></script>

</head>
<body>

	<nav>
        <br><br>
        <h1 class="tittle">PERFIL DEL PRODUCTOR</h1><br>

		<?php 

include("conexion3.php");
include("controller_login.php");
$con=conectar();


$sql="SELECT *  FROM tbl_usuarios";

$query=mysqli_query($con,$sql);
?>
<h2>Bienvenido</h2>
 <h2> <?php   echo utf8_decode($_SESSION['usuario']);?></h2>


        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="DashUsuario.php">
                    <i ></i><i class="fa-solid fa-house"></i>
                    <span class="link-name">Principal</span>
                </a></li>
                
               

                <li><a href="UserusuarioTabla.php">
                    <i ></i></i><i class="fa-regular fa-user"></i>
                    <span class="link-name">Datos del productor</span>
                </a></li>

                <li><a href="cultivosVariedad.php">
                    <i ></i><i class="fa-solid fa-bacterium"></i>
                    <span class="link-name">Consultoría</span>
                </a></li>

                <li><a href="menuAsesores.php">
                    <i ></i><i class="fa-solid fa-user-gear"></i>
                    <span class="link-name">Asesores</span>
                </a></li>

                <li><a href="Agroquimicas.php">
                    <i ></i><i class="fa-solid fa-flask-vial"></i>
                    <span class="link-name">Agroquímicas</span>
                </a></li>

                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Cerrar Sesión</span>
                </a></li>

        </div>
    </nav>
	<section class="dashboard">
	<script src="script.js"></script>
    <center> <h1 class="tittle">C U L T I V O S</h1> </center>

	<div class ="container">
	

		<div class ="card">
			<img src="images/PIÑA_.jpg">
            <br>
			<h4>P I Ñ A </h4>
			
			<a href="variedades.html">Ver más</a>
		</div>

		<div class ="card">
            
			<img src="images/LIMON.jpg">
			<h4>L I M Ó N</h4>
			
			<a href="#">Ver más</a>
		</div>


		<div class ="card">
			<img src="images/MAIZ.jpg">
			<h4>M A Í Z</h4>
			
			<a href="#">Ver más</a>
		</div>
		<script>
    
			const selectElement = function(element) {
				return document.querySelector(element);
			}
	
	
			let menuToggle = selectElement('.menu-toggle');
			let body = selectElement('body');
	
			menuToggle.addEventListener('click', function(){
				body.classList.toggle('open');
			})
	
		</script>
        
	</div>
	
</section>
</body>
</html>
