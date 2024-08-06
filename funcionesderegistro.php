<?php include_once("header.php"); ?>
<!--Inicio el contenido del sitio-->
        
        <?php
           if($_POST){
            /*1-Recibir los datos*/
            $Nombre = $_POST ['txtNombre'];
            $Apellido = $_POST ['txtApellido'];
            $Correo = $_POST ['txtCorreo'];
            $Genero = $_POST ['txtGenero'];

            /*2-Validar los datos*/

            if (!empty($Nombre) && !empty($Apellido) && !empty($Correo) && !empty($Genero)){
                echo"<h3>Puedo Guardar.</h3>";
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_harajuku_proyect";
                $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error");

                /*Sentencia SQL para registrar*/
                $Guardar = "
                INSERT INTO Usuarios (Nombre, Apellido, Correo, Genero)
                VALUES ('$Nombre','$Apellido','$Correo','$Genero')
                ";
                if(mysqli_query($conn,$Guardar))
                {
                    echo"<h3>Datos Registrados</h3>";
                    echo"<a href='index.php'>Haz otro registro</a>";
                }
                else{
                    echo"<h3>Ha fallado el envio</h3>";
                }


            }
            else{
                echo"<h3>Falta por completar</h3>";
            }

    if (empty($Nombre)) {
        echo"<h3>El Nombre</h3>";
    }
    if (empty($Apellido)) {
        echo"<h3>El Apellido</h3>";
    }
    if (empty($Correo)) {
        echo"<h3>El correo</h3>";
    }
    if (empty($Genero)) {
        echo"<h3>El genero</h3>";
    }
}

?>

</section>
</body>
</html>

<!--Fin de el contenido del sitio-->
<?php include_once("footer.php"); ?>