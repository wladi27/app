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
            <center><h2>Notificaciones</h2></center>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
            <a class="btn btn-warning btn-block" style="float: center;" href="r_msj1.php"><h4>Ofertas Aceptadas</h4></a><br><br>
            <a class="btn btn-warning btn-block" style="float: center;" href="r_msj2.php"><h4>Ofertas Rechazadas</h4></a>
            </div>
            </div></div><br><br><br><br>
        


</div>


<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>

</body>
</html>