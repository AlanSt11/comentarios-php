<?php
    if(isset($_POST['comentar'])){
        if(!empty($_POST['name']) && !empty($_POST['comment'])){
            $name = $_POST['name'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO tabla_comentarios(nombre, comentario) VALUES ('$name', '$comment')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Su comentario se ha publicado',
                        showConfirmButton: false,
                        timer: 1500
                    })
                      </script>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              $conn->close();
        }
    }
?>