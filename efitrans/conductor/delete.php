<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}

include('nav.php');

if (isset($_GET['id_oferta'])) {
$id = $_GET['id_oferta'];
$query = "SELECT * FROM ofertas WHERE id_oferta= $id";
$result=$mysqli->query($query);
if ($row = $result->fetch_assoc()){
// $nick = $row["nick"];
$envia = $row["envia"];

}

if (isset($_POST['rec'])) {
    $id = $_GET['id_oferta'];
$query = "UPDATE ofertas set tipo = '4' where id_oferta = '$id'";
        $result=$mysqli->query($query);
    if (!$result) {
    	die("Error");
    }?>
    <script>
      Swal.fire({
        type: 'delete',
        title: 'Eliminado',
        text: 'Eliminado con exito',
        showConfirmButton: true
    })
      </script>
    <script language="javascript"type="text/javascript">
    
       window.location.href= 'mis_o.php';
    </script>
    <?php
  }}?>
