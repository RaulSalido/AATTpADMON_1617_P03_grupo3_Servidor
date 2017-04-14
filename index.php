/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/


<html>

    <head>

        <title>Autenticación DNIe Servidor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

    </head>

    <body>

        <div class="texto">

            <p><h2>Práctica 3. Implementación de un servicio básico de autenticación con DNIe</h2></p>

        </div>

        <div class="principal">

<!--            <div class="conexionBD">

                <p><h3>Lista de usuarios</h3></p>

                <ul>
                    <?php
                    $link = mysql_connect('localhost:3306', 'root', '') or die('Error al conectar con el servidor');
                    if (!$link) {
                        die('Could not connect to MySQL: ' . mysql_error());
                    }

                    mysql_select_db('dni_db', $link) or die('Error al conectar con la base de datos');

                    $sql = "SELECT * FROM usuarios";
                    $resultado = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($resultado)) {

                        echo "<li>" . $row["usuario"] . " " . $row["DNI"] . "</li>";
                    }
                    ?>
                </ul>
            </div>-->

            <div id="formulario">
                <h3>Autenticación con método POST</h3>
                    Usuario:&nbsp;<input type="text" name="usuario"> &nbsp; &nbsp;
                    Clave:&nbsp;<input type="password" name="contraseña">
                    <input type="submit"  value="enviar">
            </div>

        </div>

        <footer>

            <h2>Aplicaciones Telemáticas para la Administración</h2>
            <p>Grado en Ingeniería Telemática</p>
            <p>UNIVERSIDAD DE JAÉN</p>

        </footer>

    </body>

</html>
