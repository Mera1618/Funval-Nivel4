<?php
    $nombres = $_POST['nombre'];
    $correos = $_POST['corre'];
    $celular = $_POST['numero'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include("encabezado.php");
    ?>
    <div class="mensaje-consumidor">
        <p>
            Estimado<br>
            Nombre: Señor o Señorita <?php echo "$nombres" ?><br>
            Correo: <?php echo "$correos" ?> @gmail.com <br>
            Telefono: <?php echo "$celular" ?> 555555555 <br>
            Mensaje: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima aliquam pariatur, 
            quas natus eligendi, iure impedit harum tenetur provident alias consectetur architecto totam aperiam, 
            necessitatibus ipsa voluptate molestias suscipit. Minima accusantium maxime placeat velit reprehenderit 
            accusamus deleniti ad quis soluta, voluptatem rerum, minus, amet vel porro. Unde, aliquid perferendis?
            <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima aliquam pariatur, 
            quas natus eligendi, iure impedit harum tenetur provident alias consectetur architecto totam aperiam, 
            necessitatibus ipsa voluptate molestias suscipit. Minima accusantium maxime placeat velit reprehenderit 
            accusamus deleniti ad quis soluta, voluptatem rerum, minus, amet vel porro. Unde, aliquid perferendis?<br>
            Atentamente <br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima aliquam pariatur, 
            quas natus eligendi, iure impedit harum tenetur provident alias consectetur architecto totam aperiam, 
            necessitatibus ipsa voluptate molestias suscipit. Minima accusantium maxime placeat velit reprehenderit 
            accusamus deleniti ad quis soluta, voluptatem rerum, minus, amet vel porro. Unde, aliquid perferendis?<br>
            Atentamente <br>
            Marcos Mera
        </p>
    </div>
    <?php
        include("pie-de-pagina.php");
    ?>
</body>
</html>