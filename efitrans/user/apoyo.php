<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
<div class="card bg-warning" style="background: transparent; border: transparent;">
  <form method="post" action="apoyo.php"/>
  <div class="card-header" style="background: transparent; border: transparent;">
    <header><h1>Pedir Servicio</h1></header>
  </div>
  <div class="card-body" style="border-radius: 5%">
    <fieldset>
      <section>
        <label class="label"><b>Dirección de Partida:</b></label>
        <input type="text" id="usuario" class="form-control" name="a" autocomplete="off" required/>
      </section>
      <section>
        <label class="label"><b>Dirección de Destino:</b></label>
        <input type="text" id="password" class="form-control" name="b" autocomplete="off"/>
      </section>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Nota Adicional:</b></label>
      <input type="text" id="disabledTextInput" name="d" class="form-control" placeholder="Eje: Llevo un perro">
    </div>
      <section>
        <label class="label"><b>Ofertar Precio:</b></label>
        <input type="number" id="password" min="4500" class="form-control" name="c" autocomplete="off"/>
      </section>
    </fieldset><br>
    <input type="submit" class="btn btn-dark btn-block" name="apoyo" value="Solicitar"/>
    <footer>


    </footer>
  </form></div></div></div><br><br><br><br>

  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<?php
  if (isset($_POST['apoyo'])) {
    $dp= $_POST['a'];
		$dd= $_POST['b'];
    $op= $_POST['c'];
    $t= $_POST['d'];
    $horasbd = [ '02:00:00 a', date(' h:i:s ', time())];

function sumarHoras($horas) {
    $total = 0;
    foreach($horas as $h) {
        $parts = explode(":", $h);
        $total += $parts[2] + $parts[1]*60 + $parts[0]*3600;        
    }   
    return gmdate("H:i:s ", $total);
}

$ttt = sumarHoras($horasbd);
    $query = "SELECT * FROM user where nick = '".$_SESSION['nick_act']."'";
			$result=$mysqli->query($query);
			if ($row = $result->fetch_assoc()){
        $nick = $row["nick"];
      }
		$sql = $mysqli->query("INSERT INTO apoyo (nick, tlf, dire_1, dire_2, monto, tipo) VALUES ('$nick','$t', '$dp', '$dd', '$op', '0')");
    $result=$mysqli->query($sql);
    if($result>=0){
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'success',
          title: 'Enviado!',
          text: 'Su pedido fue enviado exitosamente',
          showConfirmButton: true
      })
        </script>
<script type="text/javascript">
window.location="r_chat.php";
</script>
            <?php
            


    }else{
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'info',
          title: 'Oops...',
          text: 'Error Al Enviar Solicitud',
          showConfirmButton: false,
          timer: 3000
      })
        </script>
      <?php
    }
     } ?>