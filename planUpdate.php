<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="estilosdash.css">
    <link rel="stylesheet" href="css/style.css">
    
    
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <nav>
        

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="Dash.html">
                    <i ></i>
                    <span class="link-name">Principal</span>
                </a></li>
                
                <li><a href="usuarioTablaDash.php">
                    <i ></i>
                    <span class="link-name">Usuarios</span>
                </a></li>

                <li><a href="AgroquimicasTablaDash.php">
                    <i ></i>
                    <span class="link-name">Agroquimicas</span>
                </a></li>

                <li><a href="enfermedadTablaDash.php">
                    <i ></i>
                    <span class="link-name">Enfermedades</span>
                </a></li>

                <li><a href="plagaTablaDash.php">
                    <i ></i>
                    <span class="link-name">Plagas</span>
                </a></li>

                <li><a href="productoTablaDash.php">
                    <i ></i>
                    <span class="link-name">Productos</span>
                </a></li>

                <li><a href="cultivoTablaDash.php">
                    <i ></i>
                    <span class="link-name">Cultivos</span>
                </a></li>

                <li><a href="asesorTablaDash.php">
                    <i ></i>
                    <span class="link-name">Asesores</span>
                </a></li>

                <li><a href="#">
                    <i ></i>
                    <span class="link-name">Planes</span>
                </a></li>
                

                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Cerrar Sesi??n</span>
                </a></li>

              
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

           
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">SIICT CULTIWARE</span>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>

<?php

include("conexion3.php");
$con=conectar();

$id_plan=$_POST['id_plan'];
$tipo_plan=$_POST['tipo_plan'];
$pre_plan=$_POST['pre_plan'];


$sql="UPDATE tbl_planes SET  tipo_plan='$tipo_plan',pre_plan='$pre_plan' WHERE id_plan='$id_plan'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: planTabla.php");
    }
?>


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

<!--<script src="script.js"></script>-->
</body>
</html>