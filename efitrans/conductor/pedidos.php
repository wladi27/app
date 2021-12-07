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

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body class="bg-light" onload="ajax();">
<div class="card" style="background: transparent; border: transparent;">
		    <div class="alert alert-warning" role="alert">
  <cener>Aqui se mostraran los pedidos!<br>
  <b>Nota:</b> Cada pedido se mostrara durante 2 hora.
  </cener>


</div>
        <div id="chat">
            
        </div><br><br><br>
        </div></div>


<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>

</body>
</html>