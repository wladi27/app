<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
 <script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'r_chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body class="bg-light" onload="ajax();">

<div class="card" style="background: transparent; border: transparent;">
            <div class="card-header" style="background: transparent; border: transparent;">
            <center><h2>Notificaciones</h2></center>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
            <a class="btn btn-warning btn-block" style="float: center;" href="r_chat1.php"><h4>Ver ofertas</h4></a><br><br>
            <a class="btn btn-warning btn-block" style="float: center;" href="r_chat2.php"><h4>Ofertas Aceptadas</h4></a><br><br>
            <a class="btn btn-warning btn-block" style="float: center;" href="r_chat3.php"><h5>Viajes Largos Ofertas</h5></a><br><br>
            <a class="btn btn-warning btn-block" style="float: center;" href="r_chat4.php"><p><b>Viajes Largos Ofertas Aceptadas</b></p></a>
            </div>
            </div></div><br><br><br><br>
        


</div>


<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>

</body>
</html>