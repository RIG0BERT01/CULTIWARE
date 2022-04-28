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

                <li><a href="#">
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

                <li><a href="planTablaDash.php">
                    <i ></i>
                    <span class="link-name">Planes</span>
                </a></li>
                

                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Cerrar Sesión</span>
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

    $sql="SELECT *  FROM tbl_plagas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tabla Plagas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos de la plaga</h1>
                                <form action="PlagaInsertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_plaga" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nom_plaga" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="des_plaga" placeholder="descripción">
                                    <input type="text" class="form-control mb-3" name="foto_plaga" placeholder="imagen">
                                   
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Imagen</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_plaga']?></th>
                                                <th><?php  echo $row['nom_plaga']?></th>
                                                <th><?php  echo $row['des_plaga']?></th>
                                                <th><?php  echo $row['foto_plaga']?></th>   
                                                 
                                                <th><a href="PlagaActualizar.php?id=<?php echo $row['id_plaga'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="PlagaDelete.php?id=<?php echo $row['id_plaga'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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