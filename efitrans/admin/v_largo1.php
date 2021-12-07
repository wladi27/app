<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }

	$query = "SELECT * FROM v_largo WHERE tipo='0' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query); 
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat" class="card">
        <div class="card-header">
        <!-- <span><img src="user.svg" style="width: 20px; height: 20px; float: left;"></span> -->
        <span style="color: #1C62C4; margin-left: 10px;"><b>Pedido de: <?php echo $fila['nick']; ?></b></span>
        </div>
        <div class="card-body">
        <span style="color: black;"><b>Lugar de Partida:</b> <?php echo $fila['d1']; ?></span><br>
        <span style="color: black;"><b>Lugar de Destino:</b> <?php echo $fila['d2']; ?></span><br>
        <span style="color: black;"><b>Fecha de Partida:</b> <?php echo $fila['date']; ?></span><br>
        <span style="color: black;"><b>Hora de Partida:</b> <?php echo $fila['hp']; ?></span><br>
        <span style="color: black;"><b>Tarifa:</b> <?php echo $fila['tari']; ?></span><br>
        <span style="color: blue;"><b>Oferta:</b> COP $<?php echo $fila['monto']; ?></span><br>
        <span style="color: red;"><b>Fecha de Publicación:</b> <?php echo $fila['fecha']; ?></span>
        <a class="btn btn-info" style="float: right;" href="sele.php?id=<?php echo $fila['id']; ?>">seleccionar</a>
        </div>
	</div><br>
	
	<?php endwhile; ?>
    
