



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <center>
    <h1>Formularios</h1>
    <form action="insercion.php" method="POST">
        <label for="nombre">nombre</label><br>
        <input type="text" name="nombre" placeholder="inserte su nombre" required><br>
        
        <label for="apellido"  >apellido</label><br>
        <input type="text"name="apellido" placeholder="inserte su apellido" required><br>
        
        <label for="email">email</label><br>
        <input type="email" name="email" placeholder="inserte su email" required><br>
        
        <label for="contrasena">contraseña</label><br>
        <input type="password" name="contrasena" placeholder="inserte su contraseña" required><br>
        
        <input type="submit" value="Enviar"><br>
    </form>
    </center>
</body>
</html>