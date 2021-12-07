<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
 <div class="card" style="background: transparent; border: transparent;">
            
			<form method="post" action="v_largo.php">
				<div class="card-header" style="background: transparent; border: transparent;">
					<header><h3 style="color: blue;">Pedir Servicio</h3></header>
				</div>
				<div class="card-body" style="border-radius: 5%">
				<fieldset>
					<section>
					
							<label class="label"><b>Lugar de Partida:</b></label>
							<input type="text" class="form-control" name="a" placeholder="Lugar de Partida" aria-label="Username" aria-describedby="addon-wrapping">
                            	
					</section>
					<section>
					
							<label class="label"><b>Fecha de Partida:</b></label>
							<input type="date" class="form-control" name="f" placeholder="Fecha de Partida" aria-label="Username" aria-describedby="addon-wrapping">
                            	
					</section>
					<section>
					
							<label class="label"><b>Hora de Partida:</b></label>
							<input type="time" class="form-control" name="b" placeholder="Lugar de Partida" aria-label="Username" aria-describedby="addon-wrapping">
                            	
					</section>
					<section>
					
							<label class="label"><b>Lugar de Destino:</b></label>
							<input type="text" class="form-control" name="c" placeholder="Lugar de Destino" aria-label="Username" aria-describedby="addon-wrapping">
                            	
					</section>
					<section>
					    <label class="label"><b>Tarifas:</b></label>
					<select name="d" id="" class="form-control">
                    	<?php
                    		$query = "SELECT * FROM tari ORDER BY destino ASC";
                    		$result=$mysqli->query($query);
                    		if ($row = $result->fetch_assoc()){
                    			do {
                    				echo '<option value="'.$row["destino"].' COP $'.$row["valor"].'"><b>'.$row["destino"].' COP $'.$row["valor"].'<b></option>';
                    			} while ($row = $result->fetch_assoc());
                    		}
                    	?>
                        </select>
                    </section>
					<section>
					
							<label class="label"><b>Ingrese su Oferta:</b></label>
							<input type="number" class="form-control" name="e" placeholder="Ingrese su Oferta" aria-label="Username" aria-describedby="addon-wrapping">
                            	
					</section>
					<br>
          
				<footer>
					<input type="submit" class="btn btn-success btn-block" name="oferta" value="Ofertar" class="button"/><br>
					
				</footer>
			</form></div></div></div><br><br><br><br>




 
<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert2.min.js"></script>
	</body>
</body>
</html>
<?php
  if (isset($_POST['oferta'])) {
    $a= $_POST['a'];
		$b= $_POST['b'];
    $c= $_POST['c'];
    $d= $_POST['d'];
    $e= $_POST['e'];
     $f= $_POST['f'];
    $query = "SELECT * FROM user where nick = '".$_SESSION['nick_act']."'";
			$result=$mysqli->query($query);
			if ($row = $result->fetch_assoc()){
        $ni = $row["nick"];
      }
		$sql = $mysqli->query("INSERT INTO v_largo (nick, d1, d2, hp, tari, monto, date, tipo) VALUES ('$ni','$a', '$c', '$b', '$d', '$e', '$f', '0')");
    $result=$mysqli->query($sql);
    if($result>=0){
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'success',
          title: 'Enviado!',
          text: 'Oferta Enviada',
          showConfirmButton: true
          
      })
        </script>
      <script language="javascript"type="text/javascript">
					 window.location.href= 'v_largo.php';
				</script>
            <?php
          
        
    }else{
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'info',
          title: 'Oops...',
          text: 'Error Al Enviar',
          showConfirmButton: false,
          timer: 3000
      })
        </script>
      <?php
    }
     } ?>
