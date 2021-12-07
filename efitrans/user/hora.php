<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');
$now= new DateTime('now');
$g= $now->format('c');
// echo $now;
// echo $now->format('%d Dias');
 $query = "SELECT * FROM ofertas WHERE tipo = '1' AND recibe = '".$_SESSION['nick_act']."' ORDER by fecha DESC";
	$ejecutar = $mysqli->query($query);
	$numero = $ejecutar->num_rows;

	while($fila = $ejecutar->fetch_array()) :
        // $fecha = $fila['fecha']->format('h:m:s');
        
        // echo $fila['fecha'].'<br>';
        // $now= new DateTime('01:00:10');
        // $f= new DateTime('00:30:00');
        // $diferencia = $now->diff($f); 
        // echo $diferencia->format('%h').'<br>';
        date_default_timezone_set('America/Bogota');
        if (date_default_timezone_get()) {
            $aa = new DateTime();
            $at = date('+2 hour');
            $aa->modify('+0 hour');
            $aa->modify('+0 minutes');
            $aa->modify('+0 second');
            $f1 = $aa->format('y-m-d h:m:s').'<br>';
            echo $f1;
            // echo $at.'<br>';
            // echo $aa.'<br>';
            $ho = new DateTime();
            $pp = date("h:m:s");
            $ho->modify('+2 hour');
            $ho->modify('+0 minutes');
            $ho->modify('+0 second');
            $f2 = $ho->format('y-m-d h:m:s');
            echo $f2.' +2 Horas';
            $re1 = strtotime($f1);
            $re2 = strtotime($f2);
            $re = round(($re2-$re1),2);
            $n = $fila['envia'];
            $id_p = $fila['id'];



            $sql = $mysqli->query("INSERT INTO hora (id_p, nick, f1, f2, re) VALUES ('$id_p','$n','$f1', '$f2', '$re')");
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
        }
        

?>
	<div id="datos-chat" class="card" style="border-radius: 5%;">
        <div class="card-header" style="background: transparent; border-radius: 5%;">

        <span style="color: #1C62C4; text-align: center;"><b> Contactar a: <?php echo $fila['envia']; ?></b></span>
        </div>
        <div class="card-body">
        <span style="color: black;">Nº de Publicación:<b> <?php echo $fila['id']; ?></b></span><br>
        <span style="color: black;">Monto de la Oferta:<b> <?php echo $fila['monto']; ?></b></span><br>
        <span style="color: black;">Fecha de Envio:<b> <?php echo $fila['fecha']; ?></b></span>
				
        <form class="pt-1" action="c-user.php?id_oferta=<?php echo $fila['id_oferta']; ?>" method="post">

        <input type="submit" class="btn btn-success btn-block" name="act" value="Contactar" class="button"/><br>
        </form>
        </div>
	</div><br>



	<?php endwhile; ?>

