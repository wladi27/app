<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}
	///consultamos a la base
	$query = "SELECT * FROM ofertas WHERE tipo = '0' AND recibe= '".$_SESSION['nick_act']."' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query);
	$numero = $ejecutar->num_rows;

	while($fila = $ejecutar->fetch_array()) :


?>
	<div id="datos-chat" class="card" style="border-radius: 5%;">
        <div class="card-header" style="background: transparent; border-radius: 5%;">

        <span style="color: #1C62C4; text-align: center;"><b> Oferta de <?php echo $fila['envia']; ?></b></span>
        </div>
        <div class="card-body">
        <span style="color: black;">Nº de Publicación:<b> <?php echo $fila['id']; ?></b></span><br>
        <span style="color: black;">Monto de la Oferta:<b> <?php echo $fila['monto']; ?></b></span><br>
        <span style="color: black;">Fecha de Envio:<b> <?php echo $fila['fecha']; ?></b></span>
				<form action="delete.php?id_oferta=<?php echo $fila['id_oferta']; ?>" method="post">
					<input type="submit" class="btn btn-danger btn-block" name="rec" value="Rechazar" class="button"/>

        </form >
        <form class="pt-1" action="contac.php?id_oferta=<?php echo $fila['id_oferta']; ?>" method="post">

        <input type="submit" class="btn btn-success btn-block" name="act" value="Aceptar" class="button"/><br>
        </form>
        </div>
	</div><br>



	<?php endwhile; ?>
	
