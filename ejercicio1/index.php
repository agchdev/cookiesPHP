<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = $_COOKIE['user'];
        echo "<h1>Usuario: $user</h1>";
    ?>
    <form action="cierreSes.php" method="POST" enctype="multipart/form-data">
        <input type="submit" name="salir" value="Salir">
    </form>
</body>
</html>