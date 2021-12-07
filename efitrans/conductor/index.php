<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
 
 <div class="card" style="background: transparent; border: transparent;">
            <div class="card-header" style="background: transparent; border: transparent;">
            <h1>Bienvenido!</h1>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
                <a style="width: 100%;" href="pedidos.php" class="btn btn-block btn-dark"><h4>Tomar Pedido</h4></a><br><br>
                <a style="width: 100%;" href="mis_o.php" class="btn btn-block btn-dark"><h4>Mis Ofertas</h4></a><br><br>
                <a style="width: 100%;" href="tari.php" class="btn btn-block btn-dark"><h4>Tarifas</h4></a><br><br>
                <!-- <a style="width: 100%;" href="prox.php" class="btn btn-block btn-dark"><h4>Solicitar Vehiculo Para Viaje</h4></a> -->
            </div>
            </div></div><br><br><br><br>
  



<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</body>
</body>
</html>
