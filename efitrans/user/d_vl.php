<?php
session_start();
require('../cone.php');
if (!isset($_SESSION['nick_act'])) {
    header("location: index.php");
}

if (isset($_GET['id_oferta'])) {
$id = $_GET['id_oferta'];
$query = "SELECT * FROM ofertas_v WHERE id_oferta= $id";
$result=$mysqli->query($query);
if ($row = $result->fetch_assoc()){
// $nick = $row["nick"];
$envia = $row["envia"];

}

if (isset($_POST['rec'])) {
    $id = $_GET['id_oferta'];
$query = "UPDATE ofertas_v set tipo = '2' where id_oferta = '$id'";
        $result=$mysqli->query($query);
    if (!$result) {
    	die("Error");
    }?>
    <script language="javascript"type="text/javascript">
       window.location.href= 'r_chat.php';
    </script>
    <?php
  }}?>
