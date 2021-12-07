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
			<div class="" style="background: transparent; border: transparent;">
                <a href="apoyo.php"><img src="../img/f1.png" ></a>
                <a href="cp.php"><img class="pt-2" src="../img/e.png" ></a>
                <a href="tari.php"><img class="pt-2" src="../img/d.png" ></a>
                <a href="v_largo.php"><img class="pt-2" src="../img/c.png" ></a>
                <!--<a style="width: 100%;" href="tari.php" class="btn btn-block btn-dark"><h4>Tarifas</h4></a><br><br>-->
                <!--<a style="width: 100%;" href="v_largo.php" class="btn btn-block btn-dark"><h5>Solicitar Vehiculo Para Viaje</h5></a>-->
            </div>
            </div></div><br><br><br><br>
  



<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</body>
</body>
</html>
