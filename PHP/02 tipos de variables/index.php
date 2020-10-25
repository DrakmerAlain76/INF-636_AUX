
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php
    echo "<h1>TIPOS DE VARIABLES</h1>";
    $entero=1;
    $cadena="esto es una cadena";
    $flotante=412.4;
    $booleano=false;


    echo 'entero: '.$entero." ".gettype($entero)."</br>";
    echo 'cadena: '.$cadena." ".gettype($cadena)."</br>";
    echo 'flotante: '.$flotante." ".gettype($flotante)."</br>";
    var_dump($entero,$cadena,$flotante,$booleano);
    // var_dump($entero);
    // var_dump($cadena);
    // var_dump($flotante);
    // var_dump($booleano);

    // echo gettype($entero);
    // echo gettype($cadena);

    ?>    
    

</body>
</html>