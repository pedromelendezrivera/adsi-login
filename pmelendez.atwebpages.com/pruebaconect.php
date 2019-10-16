<?php
    	session_start();
               require_once('conexion.php');
	require_once('usuario.php');
	require_once('crud_usuario.php');
  


        
        
        
// Primero tenemos que hacer una conexión con la base de datos:
//$conexion=mysqli_connect("fdb22.awardspace.net", "3182254_baselogin","sena1234");

//$link = mysqli_connect("fdb22.awardspace.net", "3182254_baselogin", "sena1234", "3182254_baselogin");

//$conexion=mysqli_connect("mysql.webcindario.com","senalogin","senacae123");
/*Ahora vamos a seleccionar la BASE DE DATOS y no la tabla, es decir no selecciones lo de registrados.*/
//$ok = mysqli_select_db($conexion,"3182254_baselogin");
//mysqli_select_db("3182254_baselogin",$conexion);


//Ahora insertamos los datos del formulario en la base de datos.
//mysqli_query($link,"INSERT INTO usuarios (Id, nombre, clave) VALUES ('null','pedro','54321')");

echo " Usuario registrado correctamente en la base de datos. "; 


