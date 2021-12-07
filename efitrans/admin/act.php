<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}?>
<?php include('nav.php');?>
<?php
 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id= $id";
    $result=$mysqli->query($query);
    if ($row = $result->fetch_assoc()){
$nick = $row["nick"];
    // $recibe = $row["recibe"];

}
if (isset($_POST['act'])) {
    $id = $_GET['id'];
$query = "UPDATE user set activo = '2' where id = '$id'";
        $result=$mysqli->query($query);
    if (!$result) {
    	die("Error");
    }?>
    <script>
      Swal.fire({
        type: 'success',
        title: 'Aceptado',
        text: 'Se Acepto la Solicitud',
        showConfirmButton: true
    })
      </script>
    <?php
  }}


    $query = "SELECT * FROM user WHERE nick= '$nick'";
    $result=$mysqli->query($query);
    if ($row = $result->fetch_assoc()){
// $nick = $row["nick"];
    echo '
    
<div class="pt-4">
		<div class="card" style="background: transparent; border: transparent;">
            <div class="card-header" style="background: transparent; border: transparent;">
            <div class="alert alert-warning" role="alert">
  <cener>Contactar a <b>'.$row["nick"].'</b> para notificarle a ha sido aceptada su solicitud!<br>


</div>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
            <a class="btn btn-info btn-block" style="float: center;" href="tel:'.$row["tlf"].'"><h4>Llamar</h4></a><br><br>
            <a class="btn btn-success btn-block" style="float: center;" href="https://wa.me/'.$row["whatsapp"].'"><h4>WhatsApp</h4></a>
            </div>
            </div></div><br><br><br><br>
        ';

}

?>


</div>

</header>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
</body>
</body>
</html>