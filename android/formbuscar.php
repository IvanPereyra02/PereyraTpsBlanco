

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="id" placeholder="ID" value="<?php if(isset($_POST['id'] ))echo $_POST['id'] ?>">
        <input type="submit" name="boton">


    </form>
    <?php
       include("buscar.php"); 
    ?>
</body>
</html>