<<<<<<< HEAD
<?php
include("conexion.php");

if (isset($_POST['register'])) {
        $nombre    = $_POST['name'];
        $email     = $_POST['email'];
	    $contra    = $_POST['contra'];
		$fechaU    = date('m-d-Y h:i:s a',time()); 
		$fechaC    = date('m-d-Y h:i:s a',time());

$consulta = "INSERT INTO user (`id`, `usuario`, `mail`, `pasword`, `created_at`, `updated_at`) VALUES (NULL,'$nombre','$email','$contra', '$fechaC','$fechaU')";
$resultado = mysqli_query($mysql,$consulta);

=======
<?php
include("conexion.php");

if (isset($_POST['register'])) {
        $nombre    = $_POST['name'];
        $email     = $_POST['email'];
	    $contra    = $_POST['contra'];
		$fechaU    = date('m-d-Y h:i:s a',time()); 
		$fechaC    = date('m-d-Y h:i:s a',time());

$consulta = "INSERT INTO user (`id`, `usuario`, `mail`, `pasword`, `created_at`, `updated_at`) VALUES (NULL,'$nombre','$email','$contra', '$fechaC','$fechaU')";
$resultado = mysqli_query($mysql,$consulta);

>>>>>>> 9fc6135e0264ca00bde0cfab7f7095990ecd1fd3
}