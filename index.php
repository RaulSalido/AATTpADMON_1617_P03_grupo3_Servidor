<html>

    <head>

        <title>Autenticación DNIe Servidor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="Estiloindex.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="texto">

            <p><h2>Práctica 3. Implementación de un servicio básico de autenticación con DNIe</h2></p>

    </div>

    <div class="principal">

        <div class="conexionBD">
            <ul>
                <?php
                $host = "localhost";
                $usuario = "root";
                $password = "";
                $db = "dnie_db";
                $conexion = new mysqli($host, $usuario, $password, $db);
                
                if($conexion->connect_errno){
                    echo"Lo sentimos, no se ha podido establecer la conexión con la base de datos.";
                }else{
                    echo"La conexión con la base de datos se ha realizado correctamente.";
                }
                
                ?>
            </ul>
        </div>

        <form id="formulario" action="login.php" method="post">
            <fieldset>                 
                <label for="form">FORMULARIO DE ALTA DEL SERVICIO</label>

                <label for="nombre">Nombre</label>
                <input type="text" id="usuario" placeholder="ej: rsalido" />
                 
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" placeholder="NIF o DNI" />
                 
                <input class="btn" type="submit" value="Enviar" />
            </fieldset>
        </form>

    </div>

    <footer>

        <h2>Aplicaciones Telemáticas para la Administración</h2>
        <p>Raúl Salido Sánchez</p>
        <p>Grado en Ingeniería Telemática. 3º Curso.</p>
        <p>UNIVERSIDAD DE JAÉN</p>

    </footer>

</body>

</html>
