<?php 
    include_once ("header.php");
?>
<!---Inicio de Contenido--->

<body>
    <section class="ContenBarraTitulo">					
        <section class="BarraTitulo">
        </section>
    </section>
    <section id='Contenido'>				
        <section class="row">
            <section class='col-lg-8'>
                <section class="BarraTitulo">
                    <h3>Regístrate para recibir correos sobre novedades</h3>
                </section>				
                <section id="FormularioX">
                    <section id="Notificaciones"></section>
                    <form action="funcionesderegistro.php" method="POST">
                        <input type='text' name='txtNombre' placeholder='Nombre' class='Campos'>
                        <input type='Apellido' name='txtApellido' placeholder='Apellido' class='Campos'/>
                        <input type='mail' name='txtCorreo' placeholder='Correo@server.com' class='Campos'/>
                        <select name="txtGenero" class="Campos">
                            <option value="Ninguno"> Género->Elegir </option>
                            <option value="Masculino">Masculino</option>	
                            <option value="Femenino">Femenino</option>	
                            <option value="Indefinido">Indefinido</option>
                        </select>						
                        <input type='submit' value='Registrar' class='Campos'/>
                    </form>								
                </section>
            </section>
        </section>
    </section>
</body>
</html>

<!---Fin de Contenido--->
<?php 
    include_once ("footer.php");
?>