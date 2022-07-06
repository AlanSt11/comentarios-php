<?php include('config/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Caja de comentarios php</title>
</head>
<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <?php include ("models/insert.php");?>

    <div class="comments">
        <?php include("models/mostrar.php"); ?>
    </div>
    <div class="box-coment">
        <h1 class="title">Caja de comentarios</h1>
        <form method="post" id="form">
            <div>
                <label for="name">Nombre:</label> <br>
                <input type="text" name="name" id="name" placeholder="Nombre">
            </div>

            <div>
                <label for="comment">Comentario:</label> <br>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comentario"></textarea>
            </div>

            <button type="submit" name="comentar">Comentar</button>
        </form>
    </div>
</body>
</html>