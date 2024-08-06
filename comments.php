<?php 
    include_once ("header.php");
?>
<!---Inicio de Contenido--->

<body>
    <section class="container">
        <h2>Deja tu Comentario</h2>
        <form action="funcionesdecomentarios.php" method="POST">
            <section class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre...">
            </section>
            <section class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>
            </section>
            <section class="form-group">
                <input type="submit" value="Enviar">
            </section>
        </form>
    </section>
</body>

<!---Fin de Contenido--->
<?php 
    include_once ("footer.php");
?>