<!-- <h1>DATOS LLENADOS CORRECTAMENTE</h1> -->
<center>
<?php
if (isset($_POST['nombre'])& isset($_POST['apellido'])&isset($_POST['email'])&isset($_POST['contrasena'])) {
    echo "<h1>DATOS DEL FORMULARIO</h1>";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    
    echo "<h1>"."Nombre :"." ".$nombre."</h1>";
    echo "<h1>"."apellido :"." ".$apellido."</h1>";
    echo "<h1>"."email :"." ".$email."</h1>";
    echo "<h1>"."contrasena :"." ".$contrasena."</h1>";

}


?>
</center>