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
        <h1 class="tittle">Perfil del Productor</h1><br>

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
        

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-leaf"></i>
            
                    
                    <span class="text">SIICT CULTIWARE</span>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
    
        <section class="hero" id="hero">
            <div class="container">
                <h2 class="h2-sub">
                    
                </h2>
                <h1 class="head">Sistema Informático Integral de Consultoría Técnica para Cultivos Agrícolas</h1>
                <div class="he-des">
                    
                  
                </div>
            </div>
        </section>
    
        <section class="dis-sto">
            <div class="container">
                <div class="res-info">
                    <div>
                        <img src="images/LOGO CULTIWARE.jpg" alt="">
                    </div>
                
                    <div class="res-des pad-rig">
                        <div class="global">
                            <h2 class="h2-sub">
                                <span class="fil"></span>Descubre
                            </h2>
                            <h1 class="head hea-dark">La Historia</h1>
                            <div class="circle">
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <p>
                            SIICT CULTIWARE es una herramienta digital para consultoría técnica especializada y profesional para cultivos agrícolas confiable y segura, y tiene por meta asegurar tanto la calidad como la producción a buen termino, mientras abastece los insumos, minimizando costos y perdidas, ayudando a reactivas el desarrollo socioeconómico de la región
                        </p>
                        <a href="#pie" class="btn cta-btn">Nosotros</a>
                    </div>
    
                </div>
            </div>
        </section>
    
    
        <section class="taste bt">
            <div class="container">
                <div class="global">
                    <h2 class="h2-sub">
                        <span class="fil">CULTIVANDO</span>
                    </h2>
                    <h1 class="head">Calidad</h1>
                </div>
            </div>
        </section>
    
    
        <section class="disco">
            <div class="container">
                <div class="res-info">
                    <div class="res-des">
                        <div class="global">
                            <h2 class="h2-sub">
                                <span class="fil"></span>Descubre nuestros
                            </h2>
                            <h1 class="head hea-dark">cultivos</h1>
                            <div class="circle">
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <p>
                            La actividad agropecuaria es una fuente generadora de empleos y productos, a su vez es el sustento de muchas familias, así que acércate a conocer la variedad de cultivos que tenemos pensados para ti.
                        </p>
                    
                    </div>
                    <div class="image-group pad-rig">
                        <img class= "picture" src="images/piña.jpg" alt="">
                        <img class= "picture" src="images/Limon.png" alt="">
                        <img class= "picture" src="images/Maiz.png" alt="">
                        <img class= "picture" src="images/Chile.png" alt="">
                    </div>
    
                </div>
            </div>
        </section>
    
        <section class="pb bt">
            <div class="container">
                <div class="global">
                    <h2 class="h2-sub">
                        <span class="fil">SEMBRANDO</span>
                    </h2>
                    <h1 class="head">calidad</h1>
                </div>
            </div>
        </section>
    
        <section>
            <div class="container">
                <div class="res-info">
    
                    <div class="image-group">
                        <img class= "picture" src="images/agroquimicas.png" alt="">
                        <img class= "picture" src="images/Productos.png" alt="">
                    </div>
                    <div class="res-des pad-rig">
                        <div class="global">
                            <h2 class="h2-sub">
                                <span class="fil"></span>Descubre más
                            </h2>
                            <h1 class="head hea-dark">Agroquímicas</h1>
                            <div class="circle">
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <p>
                            Contamos con una amplia lista de agroquímicas cerca de tu zona donde podrás encontrar un basto catálogo de productos de alta calidad para tus cultivos.
                        </p>
                        <a href="Agroquimicas.html" class="btn cta-btn">Ver más</a>
                    </div>
    
                </div>
            </div>
        </section>
    
    
        <footer>
            <div class="container">
                <div class="footer-content">
    
                    <div class="footer-content-about">
                        <h4 id="pie">Nosotros</h4>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                            
                        </div>
                        <p>SoftLife establece su visión con un mundo estrechamente interrelacionado por las tecnologías de información, ser líder global en la provisión de soluciones innovadoras de software.
                        Además de ser ser una empresa dedicada a la creación e implementación de productos y servicios de software apoyándonos permanentemente en criterios innovadores y tecnologías en evolución.  </p>
                         </div>
    
                    <div class="footer-div">
                        <div class="social-media">
                            <h4>Siguenos</h4>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-tripadvisor"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4>Noticias</h4>
                            <form action="" class="news-form">
                                <input type="text" class="news-input"
                                placeholder="Escribe tu email"
                                >
                                <button class="news-btn" type="submit">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </form>
                        </div>
                    </div>
    
                </div>
            </div>
        </footer>
    
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
