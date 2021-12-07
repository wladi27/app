<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}
$query = "SELECT * FROM ofertas WHERE tipo = '2' AND envia = '".$_SESSION['nick_act']."' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query);
	$numero = $ejecutar->num_rows;

	while($fila = $ejecutar->fetch_array()) :


?>
	<div id="datos-chat" class="card" style="border-radius: 5%;">
        <div class="card-header" style="background: transparent; border-radius: 5%;">

        <span style="color: #1C62C4; text-align: center;"><b> Oferta Rechazada Por <?php echo $fila['recibe']; ?></b></span>
        </div>
        <div class="card-body">
        <span style="color: black;">N&#176; de Publicaci&oacute;n:<b> <?php echo $fila['id']; ?></b></span><br>
        <span style="color: black;">Monto de la Oferta:<b> <?php echo $fila['monto']; ?></b></span><br>
        <span style="color: black;">Fecha de Envio:<b> <?php echo $fila['fecha']; ?></b></span>
				
        </div>
	</div><br>



	<?php endwhile; ?>