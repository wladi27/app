<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}
	///consultamos a la base
	$query = "SELECT * FROM ofertas_v WHERE tipo = '1' AND envia = '".$_SESSION['nick_act']."' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query);
	$numero = $ejecutar->num_rows;

	while($row = $ejecutar->fetch_array()) :


?>
	<div id="datos-chat" class="card" style="border-radius: 5%;">
        <div class="card-header" style="background: transparent; border-radius: 5%;">
<span style="color: #1C62C4; text-align: center;"><b> Oferta Aceptada Por <?php echo $row['recibe']; ?></b></span></div>
<div class="card-body" style="background: transparent; border: transparent;">
        <span style="color: black;"><b>Lugar de Partida:</b> <?php echo $row['d1']; ?></span><br>
        <span style="color: black;"><b>Lugar de Destino:</b> <?php echo $row['d2']; ?></span><br>
        <span style="color: black;"><b>Fecha de Partida:</b> <?php echo $row['date']; ?></span><br>
        <span style="color: black;"><b>Hora de Partida:</b> <?php echo $row['hp']; ?></span><br>
        <span style="color: black;"><b>Tarifa:</b> <?php echo $row['tari']; ?></span><br>
        <span style="color: blue;"><b>Oferta:</b> COP $<?php echo $row['monto']; ?></span><br>
        <span style="color: red;"><b>Fecha de Publicación:</b> <?php echo $row['fecha']; ?></span>
				
        <form class="pt-1" action="conta-c.php?id=<?php echo $row['id']; ?>" method="post">

        <input type="submit" class="btn btn-success btn-block" name="act" value="Contactar" class="button"/><br>
        </form>
        </div>
	</div><br>



	<?php endwhile; ?>
	