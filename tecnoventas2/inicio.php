<html>
    <head>
        <title>Tecno Ventas </title>
        <link rel="stylesheet" href="css/estilo1.css">
</head>
<body>
<?php
     $usuario = $_POST ['nomusu'];
     $contraseña = $_POST ['contraseña'];
    if ($usuario != "SENA")
    {echo " el usuario es incorrecto";
    header ('Location: error.php');}
    else if ($usuario == "SENA")
    if($contraseña != "proyecto")
    {echo " la contraseña es incorrecta";
    header ('Location: error.php');}
    else {}
    ?>
<?php
    include("inicio/menu.html");?>
<?php
    include("inicio/inicio.html");?>
</body>
</html>