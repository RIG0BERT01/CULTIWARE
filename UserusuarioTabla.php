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
    <script src="https://kit.fontawesome.com/32a9480e06.js" crossorigin="anonymous"></script>
    
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
<nav>
        <br><br>
        <h1 class="tittle">PERFIL DEL PRODUCTOR</h1><br>

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
    include("controller_login.php");
    $con=conectar();
  

    $sql="SELECT *  FROM tbl_usuarios";
   
    $query=mysqli_query($con,$sql);
?>

<h1>Bienvenido</h1>
 <h1> <?php   echo utf8_decode($_SESSION['usuario']);?></h1>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos de usuario</h1>
                                <form action="usuarioInsertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_usuario" placeholder="Id">
                                    <input type="text" class="form-control mb-3" name="rfc_usuario" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="nom_usuario" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="mail_usuario" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="tel_usuario" placeholder="Teléfono">
                                    <!-- <input type="text" class="form-control mb-3" name="user_usuario" placeholder="user_usuario">
                                    <input type="text" class="form-control mb-3" name="pas_usuario" placeholder="pas_usuario">
                                    <input type="text" class="form-control mb-3" name="tipo_usuario" placeholder="tipo_usuario">
                                    <input type="text" class="form-control mb-3" name="id_plan" placeholder="id_plan"> -->

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>RFC</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <!-- <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Tipo de usuario</th>
                                        <th>Plan</th> -->
                                        
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php

                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['rfc_usuario']?></th>
                                                <th><?php  echo $row['nom_usuario']?></th>
                                                <th><?php  echo $row['mail_usuario']?></th>    
                                                <th><?php  echo $row['tel_usuario']?></th>
                                                <th><?php  echo $row['user_usuario']?></th>
                                                <th><?php  echo $row['pas_usuario']?></th>
                                                <th><?php  echo $row['tipo_usuario']?></th>  
                                                <th><?php  echo $row['id_plan']?></th> 
                                                <th><a href="usuarioActualizar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="usuarioDelete.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>



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