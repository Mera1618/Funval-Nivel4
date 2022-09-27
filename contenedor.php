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
    <section class="main">
                    <section class="loggeo d-flex flex-row-reverse justify-content-start align-items-center m-5">
                    <form class="p-3 pt-5 " action="./mensaje.php" method="post">
                        <h1 class="title3 mb-4">Dejanos un Mensaje</h1>
              <!--<div class="mb-4" action="./registro.php" method="post">-->
                <label for="exampleInputEmail1" class=" mb-2 form-label label3">Nombre</label>
                <input  name="nombre" type="text" class="form-control field"  aria-describedby="emailHelp" placeholder="Enter your name">
                <label for="exampleInputEmail1" class=" mb-2 form-label label3">Email</label>
                <input  name="email" type="email" class="form-control field" aria-describedby="emailHelp" placeholder="Enter Email">
                <label for="exampleInputEmail1" class=" mb-2 form-label label3">Numero de telefono</label>
                <input  name="telefono" type="number" class="form-control field" aria-describedby="emailHelp" placeholder="Enter your phone number">
                <!--</div>-->
                <!--<div class="mb-5" action="./registro.php" method="post">-->
                  <label for="exampleInputPassword1" class="form-label label3">Mensaje</label>
                  <textarea name="mensaje" type="text" class=" mb-4 form-control field parrafo" placeholder="Enter your message"></textarea>
                <!--</div> -->
                <button type="submit" name="enviar" class="enviar btn btn-success">Enviar</button>
              </form>
                      </section>
                  </section>
  

<?php
    include("pie-de-pagina.php");
?>