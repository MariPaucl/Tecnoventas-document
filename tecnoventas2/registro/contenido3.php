<!DOCTYPE html>
<html>
    <head>
<title>Tecno Ventas</title>
        <link rel="stylesheet" href="css/estilo3.css">
</head>
<body>
    <form class="formulario" method="post" action="iniciosesion.php">
        <h1>¡Gracias por Registrarte!</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-tipdocument"></i>
        
                <img src="registro/imagenes/tipodocumento.png"/>
                 <b>Tipo Documento:<br>
                <?php $tipdocument = $_POST ['tipdocument']; echo $tipdocument?>
</div>
<div class="input-contenedor">
                <i class="fas fa-numdocument"></i>
        
                <img src="registro/imagenes/numerodocumento.png"/>
    
                <b>Numero Documento:<br>
                <?php $numdocument = $_POST ['numdocument']; echo $numdocument?>
</div>
<div class="input-contenedor">
                <i class="fas fa-prinom"></i>
        
                <img src="registro/imagenes/hombre.png"/>
                <b>Primer Nombre:<br>
                <?php $prinom = $_POST ['prinom']; echo $prinom?>
</div>
<div class="input-contenedor">
                <i class="fas fa-segnom"></i>
        
                <img src="registro/imagenes/hombre.png"/>
                <b>Segundo Nombre:<br>
                <?php $segnom = $_POST ['segnom']; echo $segnom?>
</div>
<div class="input-contenedor">
                <i class="fas fa-priape"></i>
        
                <img src="registro/imagenes/hombre.png"/>
                <b>Primer Apellido:<br>
                <?php $priape = $_POST ['priape']; echo $priape?>
</div>
<div class="input-contenedor">
                <i class="fas fa-segape"></i>
        
                <img src="registro/imagenes/hombre.png"/>
     <b>Segundo Apellido:<br>
                <?php $segape = $_POST ['segape']; echo $segape?>
</div>
<div class="input-contenedor">
                <i class="fas fa-nomusu"></i>
        
                <img src="registro/imagenes/usuario.png"/>
                <b>Nombre de Usuario:<br>
                <?php $nomusu = $_POST ['nomusu']; echo $nomusu?>
</div>
<div class="input-contenedor">
                <i class="fas fa-pais"></i>
        
                <img src="registro/imagenes/pais.png"/>
                <b>pais:<br>
                <?php $pais = $_POST ['pais']; echo $pais?>
</div>
<div class="input-contenedor">
                <i class="fas fa-ciudad"></i>
        
                <img src="registro/imagenes/ciudad.png"/>
                <b>Ciudad:<br>
                <?php $ciudad = $_POST ['ciudad']; echo $ciudad?>
</div>
<div class="input-contenedor">
                <i class="fas fa-direccion"></i>
        
                <img src="registro/imagenes/direccion.png"/>
                <b>Direccion:<br>
                <?php $direccion = $_POST ['direccion']; echo $direccion?>
</div>
<div class="input-contenedor">
                <i class="fas fa-correoele"></i>
        
                <img src="registro/imagenes/correo.png"/>
                <b>Correo Electronico:<br>
                <?php $correoele = $_POST ['correoele']; echo $correoele?>
</div>
<div class="input-contenedor">
                <i class="fas fa-contraseña"></i>
        
                <img src="registro/imagenes/contraseña.png"/>
                <b>Contraseña:<br>
                <?php $contraseña = $_POST ['contraseña']; echo $contraseña?>
</div>
<div class="input-contenedor">
                <i class="fas fa-genero"></i>
        
                <img src="registro/imagenes/genero.png"/>
                <b>Genero:<br>
                <?php $genero = $_POST ['genero']; echo $genero?>
</div>
<div class="input-contenedor">
                <i class="fas fa-numtelefono"></i>
        
                <img src="registro/imagenes/telefono.png"/>
                <b>Numero de Telefono:<br>
                <?php $numtelefono = $_POST ['numtelefono']; echo $numtelefono?>
</div>
<div class="input-contenedor">
                <i class="fas fa-fenaci"></i>
        
                <img src="registro/imagenes/fecha.png"/>
                <b>Fecha de Nacimiento :<br>
                <?php $fenaci = $_POST ['fenaci']; echo $fenaci?>
</div>
<div class="input-contenedor">
                <i class="fas fa-edad"></i>
        
                <img src="registro/imagenes/edad.png"/>
                <b>Edad:<br>
                <?php $edad = $_POST ['edad']; echo $edad?>
</div>















                 <input type="submit" value="Iniciar Sesion" class="button">
                 <center>

                 ¿Quieres Cambiar Algo? <a class="link" href="registrarse.php">Registrate </a>
   
</div>
</form>

</body>
</html>
