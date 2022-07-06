<?php
include ("config/conexion.php");
    $sql = "SELECT nombre, comentario FROM tabla_comentarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div class=\"section-comments\">
        <img src=\"img/c9cffed13c2d8447c46fb43893327ede.png\">
        <p class=\"name\">$row[nombre]</p>
        <p>$row[comentario]</p>
    </div>";
      }
    } else {
      echo "0 results";
    }
?>
