<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
	///consultamos a la base
	 $query = "SELECT * FROM user WHERE activo <= '1'";
	$ejecutar = $mysqli->query($query);
	$numero = $ejecutar->num_rows;
 $nick = $fila['nick'];
	while($fila = $ejecutar->fetch_array()) :


?>
	<div id="datos-chat" class="card" style="border-radius: 5%;">
        <div class="card-header" style="background: transparent; border-radius: 5%;">
        <span style="color: #1C62C4; text-align: center;"><b>Nº de Solicitud <?php echo $fila['id']; ?></b></span>
        </div>
        <div class="card-body">
            <span style="color: black;"><b>Nombre Completo:</b> <?php echo $fila['nombre']; ?></span><br>
            <span style="color: black;"><b>Nº de CC:</b> <?php echo $fila['cc']; ?></span><br>
            <span style="color: black;"><b>Email:</b> <?php echo $fila['email']; ?></span><br>
            <span style="color: black;"><b>Nombre de Usuario:</b> <?php echo $fila['nick']; ?></span><br>
            <span style="color: black;"><b>Contraseña:</b> <?php echo $fila['pass']; ?></span><br>
            <span style="color: black;"><b>Rol: <?php if($fila["tipo"]== 1){
                echo 'Usuario';
     }else{
         echo 'Conductor';
     }?></b> </span><br>
            <span style="color: black;"><b>WhatsApp:</b> <?php echo $fila['whatsapp']; ?></span><br>
            
        
				
        <form action="rec.php?id=<?php echo $fila['id']; ?>" method="post">
					<input type="submit" class="btn btn-danger btn-block" name="rec" value="Rechazar" class="button"/>

        </form >
        <form class="pt-1" action="act.php?id=<?php echo $fila['id']; ?>" method="post">

        <input type="submit" class="btn btn-success btn-block" name="act" value="Aceptar" class="button"/><br>
        </form>
        </div>
	</div><br>


	<?php endwhile; ?>