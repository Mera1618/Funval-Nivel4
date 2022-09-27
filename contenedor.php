<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    include("encabezado.php");
?>
    <div class="bibliografia">
        <h1 class="titulos">Bibliografía</h1>
        <p>Hola soy Marcos Rogelio Mera y me dedico a el desarrollo Soy oiriginario de Hidalgo, México y estudio una Ingenieria en 
            Tecnologías de la Información y Comunicaciones. Me especializo en lenguaje de programación como Java y Python y desarrollo 
            web con HTML y CSS. Aunado a esto tambien manejo base de datos como SQL Y cuanto con algunas certificaciones en el 
            área de rede
        </p>
        <div>
            <h1 class="titulos">Experiencia Laboral</h1>
            <p>Cuento con diversas experiencias en el campo de las TI como lo son: </p>
            <ul>
                <li>FULL STACK DEVELOPER - CLEVER CLOUD: esarrollo frontend de diversos sitios web de clientes de la compañía.</li>
                <li>DSC Lead at Google en Google Developer Student Clubs: Coordinación de eventos dentro de la comunidad</li>
                <li>Hidroelect: Desarrollo colaborativo de diseño del sitio web para la empresa</li>
            </ul>
        </div>
        <div>
            <h1 class="titulos">Formación Profesional</h1>
            <ul>
                <li>Técnico en Soporte y Mantenimiento de Equipos de Computo por el: Centro de Estudios Tecnológicos, Industriales y de Servicios No. 26</li>
                <li>Ingeniero en Tecnologías de la Información y Comunicaciones por el: Instituto Tecnológico Superior del Occidente del Estado de Hidalgo</li>
            </ul>
        </div>
    </div>
    <div class="formulario-contacto-interno">
        <h1 class="titulos">Formulario</h1>
        <form action=“mensaje.php” method=“post”>
            <!-- <div class="mb-3"> -->
              <label for="exampleName" class="form-label">Name</label>
              <input type="name" name='nombre' class="form-control" id="full-name" placeholder="Full Name">
            <!-- </div> -->
            <!-- <div class="mb-3"> -->
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name='corre' class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
            </div>
            <!-- <div class="mb-3"> -->
              <label for="exampleNumber" class="form-label">Number</label>
              <input type="number" name='numero' class="form-control" id="examplenumber" placeholder="Phone number">
            <!-- </div> -->
            <button type="submit" class="btn btn-success d-grid gap-2 mx-auto w-100"><a class="boton-inicial" href="mensaje.php">Enviar</a></button>
          </form>
    </div>
<?php
    include("pie-de-pagina.php");
?>