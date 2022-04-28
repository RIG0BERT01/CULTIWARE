<?php
$nombre=$_POST['usuario'];
$clave=$_POST['pas'];
session_start();
$_SESSION['usuario']=$nombre;

$conexion=mysqli_connect("localhost","root","","bd_siictware");

$consulta="SELECT*FROM usuarios where nombre='$nombre' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:DashAsesor.html");

}else
if($filas['id_cargo']==2){ //cliente
header("location:DashUsuario.php");
}
else
if($filas['id_cargo']==3){ //cliente
header("location:DashAgros.html");
}
else{
    ?>
    <?php
    include("controller_login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);