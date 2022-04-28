<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="images/LOGO CULTIWARE.jpg" type="image/x-icon" />
	<title>Asesores</title>

	<link rel="stylesheet" href="asesores.css">
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
		
		
		<h1>ASESORES</h1>
		
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todos los asesores</a>
				<a href="#" class="category_item" category="rodriguez">Juan Rodríguez Clara</a>
				<a href="#" class="category_item" category="isla">Isla</a>
				<a href="#" class="category_item" category="playa">Playa Vicente</a>
				<a href="#" class="category_item" category="azueta">José Azueta</a>
				<a href="#" class="category_item" category="acayucan">Acayucan</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="rodriguez">
					<img src="images/Hombre_7.png" alt="" >
					<a href="asesorUno.php">Ing. Ruben Castro <br> Martinez</a>
				</div>
				<div class="product-item" category="rodriguez">
					<img src="images/Hombre_1.png" alt="" >
					<a href="asesorDos.php">Ing. Eloy Alberto Molina Rojas</a>
				</div>
				<div class="product-item" category="isla">
					<img src="images/Mujer_2.png" alt="" >
					<a href="asesorTres.php">Ing. Maria Estela Rodriguez Perez</a>
				</div>
				<div class="product-item" category="isla">
					<img src="images/Hombre_4.png" alt="" >
					<a href="asesorCuatro.php">Ing. Rodrigo Escobedo <br> Robles </a>
				</div>
				<div class="product-item" category="playa">
					<img src="images/Hombre_2.png" alt="" >
					<a href="asesorCinco.php">Ing. Esteban Murillo <br> Ramos</a>
				</div>
				<div class="product-item" category="playa">
					<img src="images/Mujer_1.png" alt="" >
					<a href="asesorSeis.php">Ing. Lorena Serrano <br> Hernandez</a>
				</div>
				<div class="product-item" category="azueta">
					<img src="images/Hombre_5.png" alt="" >
					<a href="asesorSiete.php">Ing. Sergio Galván <br> Torres</a>
				</div>
				<div class="product-item" category="azueta">
					<img src="images/Mujer_3.png" alt="" >
					<a href="asesorOcho.php">Ing. Karla Irene Franyutti López</a>
				</div>
				<div class="product-item" category="acayucan">
					<img src="images/Hombre_3.png" alt="" >
					<a href="asesorNueve.php">Ing. Guillermo González Sanchez</a>
				</div>
				<div class="product-item" category="acayucan">
					<img src="images/Hombre_6.png" alt="" >
					<a href="asesorDiez.php">Ing. José Alfredo Malaga Victorio</a>
				</div>
			</section>
		</div>
	</div>
</section>
</body>
</html>