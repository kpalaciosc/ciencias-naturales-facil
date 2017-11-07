<?php 
  session_start();

  $ucorreo=$_POST['correo'];
  $contra=$_POST['contraseña'];

  //include("../modelo/conexion.php");
  $server="localhost";
$user="root";
$password="root";
$bd="bd_wresponsive";
$conexion=new  mysqli($server,$user,$password,$bd);

  $con= $conexion->query("SELECT * FROM usuario WHERE correo='$ucorreo' and password='$contra'");
   if($resultado = mysqli_fetch_array($con)){
     $_SESSION['u_usuario'] = $ucorreo;
     $_SESSION['c_contra'] = $contra;
     header("Location:../controlador/vista/materias.html");
     
   }else{
   	 header("Location:../vista/login.html");
     
   } 
 ?>