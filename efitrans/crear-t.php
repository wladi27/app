<?php
 session_start();
 require('cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('admin/nav.php');?>
 
    <div class="pt-4">
<div class="card bg-warning" style="background: transparent; border: transparent;">
  <form method="post" action="crear-t.php"/>
  <div class="card-header" style="background: transparent; border: transparent;">
    <header><h1>Registrar Tarifa</h1></header>
  </div>
  <div class="card-body" style="border-radius: 5%">
    <fieldset>
      <section>
        <label class="label"><b>Destino:</b></label>
        <input type="text" id="usuario" class="form-control" name="a" autocomplete="off" required/>
      </section>
      <section>
        <label class="label"><b>valor:</b></label>
        <input type="text" id="password" class="form-control" name="b" autocomplete="off"/>
      </section>
    </fieldset><br>
    <input type="submit" class="btn btn-dark btn-block" name="apoyo" value="Registrar"/>
    <footer>


    </footer>
  </form></div></div></div><br><br><br><br>

  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<?php
  if (isset($_POST['apoyo'])) {
    $dp= $_POST['a'];
		$dd= $_POST['b'];
    $found=false;
    $sql1= "select * from tari where destino=\"$_POST[a]\"";
    $query = $mysqli->query($sql1);
    while ($r=$query->fetch_array()) {
      $found=true;
              break;
    }

          if($found){
            ?>
              <script language="javascript"type="text/javascript">
              Swal.fire({
        type: 'info',
        title: 'Oops...',
        text: 'Ya Existe Ingrese Otro',
        showConfirmButton: false,
        timer: 3000
      })
              </script>
            <?php
              exit();
          }
	$sql = $mysqli->query("INSERT INTO tari (destino, valor) VALUES ('$dp', '$dd')");
    $result=$mysqli->query($sql);
    if($result>=0){
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'success',
          title: 'Enviado!',
          text: 'Enviado exitosamente',
          showConfirmButton: true
      })
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