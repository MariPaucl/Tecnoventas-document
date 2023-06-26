<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo3.css">
</head>
<body>
    <form class="formulario" method="post" action="inicio.php">
        <h1>Inicia Sesion</h1>
        <div class="contenedor">

    
        <div class="input-contenedor">
        <i class="fas fa-nomusu"></i>
        <img src="registro/imagenes/usuario.png"/>
        <input type="text" name="nomusu"placeholder="Nombre Usuario ">

        <div class="input-contenedor">
   <i class="fas fa-contraseña"></i>
   <img src="registro/imagenes/contraseña.png"/>
   <input type="password" name="contraseña" placeholder="Contraseña ">
   </div>
   


   <input type="submit" value="Iniciar" class="button"> <p>
   ¿No tienes cuenta? <a class="link" href="registrarse.php">Registrate </a>
</form>
</body>
</html>
