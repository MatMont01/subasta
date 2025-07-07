<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form  enctype="multipart/form-data" action="index.php/Excel/read" method="post">
                <input type="file" name="file" id="file" title="Subir Archivo" required />
                <input type="hidden" name="action" value="importar">
                <input type="hidden" name="id_file" value="1">
                <input type="submit" value="enviar">
            </form>
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>