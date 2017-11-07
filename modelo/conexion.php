<?php 


/*
//Primer Login

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$server="localhost";
$user="root";
$password="root";
$bd="bd_wresponsive";

//Conectar a la BD
$conexion= mysqli_connect($server,$user,$password,$bd);
$consulta= "SELECT * FROM usuario WHERE correo='$correo' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);



if($filas>0){
  header("location:../vista/materias.html");

}else{
  echo "Error en la autenticacion";
}


//libera los resultados obtenidos de la bd, para que no consuma espacio de memoria.
mysqli_free_result($resultado);
mysqli_close($conexion);

*/

$server="localhost";
$user="root";
$password="root";
$bd="bd_wresponsive";
$conexion=new  mysqli($server,$user,$password,$bd);
/*
if($conexion){

    echo "conexion exitosa";
}else{
    echo "conexion no exitosa";
}
*/

 ?>