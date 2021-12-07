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
    $query = "SELECT * FROM ofertas_v WHERE id= $id";
    $result=$mysqli->query($query);
    if ($row = $result->fetch_assoc()){
// $nick = $row["nick"];
    $recibe = $row["recibe"];

}


    $query = "SELECT * FROM user WHERE nick= '$recibe'";
    $result=$mysqli->query($query);
    if ($row = $result->fetch_assoc()){
// $nick = $row["nick"];
    echo '
    
<div class="pt-4">
		<div class="card" style="background: transparent; border: transparent;">
            <div class="card-header" style="background: transparent; border: transparent;">
            <center><h2>Opciones de Contacto</h2></center>
            </div>
			<div class="card-body" style="background: transparent; border: transparent;">
            <a class="btn btn-info btn-block" style="float: center;" href="tel:'.$row["tlf"].'"><h4>Llamar</h4></a><br><br>
            <a class="btn btn-success btn-block" style="float: center;" href="https://wa.me/'.$row["whatsapp"].'"><h4>WhatsApp</h4></a>
            </div>
            </div></div><br><br><br><br>
        ';

}}

?>


</div>

</header>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
</body>
</body>
</html>