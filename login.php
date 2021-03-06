<html> 
    <head>
        <title>Autenticación con DNIe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="Estilologin.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>
        <div id="texto">

            <h2>Práctica 3. Implementación de un servicio básico de autenticación con DNIe</h2>

        </div>


        <div id="contenido">
            <?php
                //$usuario = NULL;
                $DNI = NULL;
                $contraseña = NULL;
                $autenticado = false;

                $usuario=$_POST["usuario"];
                        
//                echo "USUARIO 1: ".$usuario."<br/>";
                        
                $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);


//                echo "USUARIO: ".$usuario."<br/>";
                        
                if ($usuario != NULL) {

                    $DNI = filter_input(INPUT_POST, 'DNI', FILTER_SANITIZE_STRING);
                    $contraseña = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    //echo "CLAVE: ".$contraseña."<br/>";
                    if ($contraseña != NULL){
            ?>
                        <h3>Autenticado mediante POST</h3>
            <?php
                    }
                }else{
                    die("usuario en blanco");
                }
                
                //aqui comienza la conexion con la base de datos y hacemos una consulta.
                $host = "localhost";
                $usuariodb = "root";
                $password = "";
                $db = "dnie_db";
                $conexion = new mysqli($host, $usuariodb, $password, $db);
                
                if($conexion->connect_errno){
                    echo"Lo sentimos, no se ha podido establecer la conexión con la base de datos.";
                }else{
                    echo"La conexión con la base de datos se ha realizado correctamente.";
                }

                $sql = "SELECT * FROM usuarios";           
                $res = mysqli_query($conexion, $sql);
                    while ($row = mysqli_fetch_row($res)){
                        if ($row[0] == $usuario && $row[2] == $contraseña) {
                            $autenticado = true;
                        }
                    }
                

                if ($autenticado) {
            ?>
                    <h4>Hola, <?php echo $usuario . " con DNI " . $contraseña; ?></h4>
            <?php
                } else {
            ?>
                    <h4>Autenticacion errónea.</h4>
            <?php 
                echo "<p><strong>" . $usuario . "</strong> no existe o los datos introducidos son incorrectos.</p>"; 
            ?>
                    
            <?php
                }
            ?>          
        </div>

        
        <footer>
            <h2>Aplicaciones Telemáticas para la Administración</h2>
            <p>Raúl Salido Sánchez</p>
            <p>Grado en Ingeniería Telemática. 3º Curso.</p>
            <p>UNIVERSIDAD DE JAÉN</p>
        </footer>
    </body>
</html>


