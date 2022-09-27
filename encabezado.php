<link rel="stylesheet" href="css/style.css">
 <body vlink="#3366FF"><div id="encabezado">
  <table width="100%" border="0">
    <tr>
       <td align="left"><font color="#FFFFFF" face="Palatino Linotype, Book Antiqua, Palatino, serif" size="-1">
		<?php date_default_timezone_set("America/Lima");
		$Fecha= date('d-m-Y');
		$Hora= date('H:i:s');
		$Ip= $_SERVER['REMOTE_ADDR'];
		echo "Fecha: ".$Fecha;
		echo "<br>";
		echo "Hora: ".$Hora;
        ?>
		</font></td>
		<td align="center"><font color="#000066"><h1>PROGRAMADOR WEB</h1> </font></td>
		<td align="right"><img src="img/Marcos.png" width="92" height="72" alt="MRMM"></td>
    </tr>
  </table>
</div> 
   <hr>