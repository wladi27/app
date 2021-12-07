<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
	///consultamos a la base
	$DateAndTime = date(' h:i:s ', time());
	$query = "SELECT * FROM apoyo WHERE tipo='0' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query); 
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat" class="card">
        <div class="card-header">
        <!-- <span><img src="user.svg" style="width: 20px; height: 20px; float: left;"></span> -->
        <span style="color: #1C62C4; margin-left: 10px;"><b>Pedido de: <?php echo $fila['nick']; ?></b></span>
        </div>
        <div class="card-body">
        <span style="color: black;">Punto A: <?php echo $fila['dire_1']; ?></span><br>
        <span style="color: black;">Punto B: <?php echo $fila['dire_2']; ?></span><br>
        <span style="color: black;">Nota Adicional: <?php echo $fila['tlf']; ?></span><br>
        <span style="color: blue;">Monto: <?php echo $fila['monto']; ?></span><br>
        <span style="color: red;">Fecha: <?php echo $fila['fecha']; ?></span>
        <a class="btn btn-info" style="float: right;" href="msj.php?id=<?php echo $fila['id']; ?>">seleccionar</a>
        </div>
	</div><br>
	
	<?php endwhile; ?>
    
