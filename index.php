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
    <div class="contenedor-principal">
    <div style="width: 850px; height: 500px; background: url('img/fondo-principal.jpg');">Hola Mundo</div>
    <div class="formulario-central">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-success d-grid gap-2 mx-auto w-100"><a class="boton-inicial" href="contenedor.php">Login</a></button>
            <?php
                if (isset($_POST['submit'])) {
                    $correo = "Correo electronico: ".$POST['email']."";
                    $contraseña = "La contraseña es: ".$POST['password']."";
                }
            ?>
          </form>
    </div>
    </div>
    <?php
    include("pie-de-pagina.php");
        ?>
</body>
</html>