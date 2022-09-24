<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
include("db.php");


if(trim("boton")){

$id = $_POST["id"];
$consulta =  "SELECT * FROM 'registros' WHERE 'id' = '$id'";
$res = mysqli_query($mysql,$consulta);
}
?>

<table>
  <thead>
  <th>Nombre</th>  
  <th>Email</th>
  <th>Fecha alta</th>
  <th>Fecha Modif</th>
  </thead>
  <tbody>
    <?php while($row = $res->fetch_assoc()){?>
     <tr>
        <td><?php echo $row['usuario']?></td>      
     </tr>

    <?php }?>
  </tbody>

</table>
</body>
</html>




