<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
 <?php

      $query = "SELECT * FROM user WHERE activo <= '1'";
      $ejecutar = $mysqli->query($query);
      $pendi = $ejecutar->num_rows;
      
      while($fila = $ejecutar->fetch_array()) ;
      
    ?>
 <div class="card" style="background: transparent; border: transparent;">
            <div class="card-header" style="background: transparent; border: transparent;">
            <h1>Bienvenido <?php echo $_SESSION['nick_act'];?>!</h1>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
			    <a style="width: 100%;" href="apro.php" class="btn btn-block btn-dark">Pendientes <span style="padding: 2px 7px; background: #f21; border-radius: 50%; color: white;" class=" position-relative label label-success "><b><?php echo $pendi;?></b></span><h4>Aprobar Ingreso</h4></a><br><br>
                <a style="width: 100%;" href="v_largo.php" class="btn btn-block btn-dark"><h4>Viajes Largos</h4></a><br><br>
                <a style="width: 100%;" href="../crear-t.php" class="btn btn-block btn-dark"><h4>Crear Tarifa</h4></a><br><br>
                <!--<a style="width: 100%;" href="tari.php" class="btn btn-block btn-dark"><h4>Tarifas</h4></a><br><br>-->
                <!-- <a style="width: 100%;" href="prox.php" class="btn btn-block btn-dark"><h4>Solicitar Vehiculo Para Viaje</h4></a> -->
            </div>
            </div></div><br><br><br><br>
  



<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</body>
</body>
</html>
