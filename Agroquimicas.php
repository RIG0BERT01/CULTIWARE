<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="images/LOGO CULTIWARE.jpg" type="image/x-icon" />
	<title>Agroquímicas</title>

	<link rel="stylesheet" href="css/agroquimica.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<script src="https://kit.fontawesome.com/32a9480e06.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="estilosdash.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/SCRIPTS.js"></script>
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
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

           
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
	<div class="wrap">
		<header>
			<img src="images/icono.png" alt="">
		</header>
		
		<h1>Agroquímicas de la región</h1>
		<br><br>
		
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todas las agroquímicas</a>
				<a href="#" class="category_item" category="rodriguez">Juan Rodríguez Clara</a>
				<a href="#" class="category_item" category="isla">Isla</a>
				<a href="#" class="category_item" category="playa">Playa Vicente</a>
				<a href="#" class="category_item" category="azueta">José Azueta</a>
				<a href="#" class="category_item" category="acayucan">Acayucan</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="rodriguez">
					<img src="images/fypa.png" alt="" >
					<a href="agroquimicaFypaRguez.php">Agroquímica  "FYPA RGUEZ"</a>
				</div>
				<div class="product-item" category="rodriguez">
					<img src="images/agroses.png" alt="" >
					<a href="agroquimicaAgroses.php"> Agroquímica<br>"Agroses"</a>
				</div>
				<div class="product-item" category="rodriguez">
					<img src="images/agroananas.png" alt="" >
					<a href="agroquimicaAgroAnanas.php"> Agroquímica<br>"Ananas Agro"</a>
				</div>
				<div class="product-item" category="isla">
					<img src="images/fyngsa.png" alt="" >
					<a href="agroquimicaAgroFigsa.php"> Agroquímica<br>"Agrofingsa"</a>
				</div>
				<div class="product-item" category="isla">
					<img src="images/agromas.png" alt="" >
					<a href="agroquimicaAgromas.php">Agroquímica<br>"Agromas"</a>
				</div>
				<div class="product-item" category="playa">
					<img src="images/agropecuariadelcentro.png" alt="" >
					<a href="agroquimicaDelcentro.php">Agropecuaria "DEL CENTRO"</a>
				</div>
				<div class="product-item" category="playa">
					<img src="images/agrosan.png" alt="" >
					<a href="agroquimicaAgrosan.php">Agroquímica<br>"Agrosan"</a>
				</div>
				<div class="product-item" category="azueta">
					<img src="images/agroveterinaria.png" alt="" >
					<a href="agroVeterinaria.php">Agrícola Veterinaria Los Ángeles</a>
				</div>
				<div class="product-item" category="azueta">
					<img src="images/Bynsa.png" alt="" >
					<a href="agroquimicaBynsa.php">Fertilizantes y Agroquimicos Bynsa</a>
				</div>
				<div class="product-item" category="acayucan">
					<img src="images/Agrigan.jpg" alt="" >
					<a href="agroquimicaAgrigan.php">Agrigán</a>
				</div>
				<div class="product-item" category="acayucan">
					<img src="images/agrogema.jpg" alt="" >
					<a href="agroquimicaAgrogema.php">Agrogema - Agros de la Cuenca</a>
				</div>
			</section>
		</div>
	</div>
</section>
</body>
</html>