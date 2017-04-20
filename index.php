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

            <p><h3>Lista de usuarios</h3></p>

            <ul>
                <?php				
                    $link = mysql_connect('localhost:3306', 'root', '') or die('Error al conectar con el servidor');
                    if (!$link) {
                        die('Could not connect to MySQL: ' . mysql_error());
                    }

                    mysql_select_db('dni_db', $link) or die('Error al conectar con la base de datos');				
                ?>
            </ul>
        </div>

        <form id="formulario" action="#" method="post">
            <!--                <h3>Autenticación con método POST</h3>
                            
                            Usuario:&nbsp;<input type="text" name="usuario" placeholder="ej: rsalido"> &nbsp; &nbsp;
                            Clave:&nbsp;<input type="password" name="contraseña" placeholder="NIF o DNI">
                            <input type="submit"  value="enviar">-->

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
