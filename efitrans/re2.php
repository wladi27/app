<?php
 session_start();
 if (isset($_SESSION['nick_act'])) {
     header("location: home.php");
 }
 require('cone.php');?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EFITRANS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/sweetalert2.min.css">
<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/jquery-3.2.1.min.js"></script>
<script src="bootstrap5/js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
    <style>
    *{
     margin    : 0;
     padding   : 0;
     box-sizing: border-box;
    }

    .btn btn-success{
    	margin-left: 20%;
      width: 100%;
    }
    .card-body{
    	/* background-color: #0988ff; */
    }


    .card{
    	width: 40%;
    	margin-left: 30%;
    	margin-right: 30%;
    	float: center;
    	justify-content: center;
    }

    h3{
    	text-align: center;
    	color: rgb(255, 255, 255);
    }

    .card img{
    	width: 100%;
    	height: 150px;
    }

    h1{

    	text-align: center;
    }





    @media screen and (max-width: 46.0625em) {

    	body{
    		background-size: 200%;
    		background-repeat: no-repeat;
    	}

    	.tarjeta {
    		padding: 0;
    	}

    	.card {
    		width: 98%;
    		margin-left: 1%;
    		margin-right: 1%;
    	}

    	.column p {
    		text-align: left;
    		font-size: 1.5em;
    	}

    	.column:nth-child(2) {
    		box-shadow: 0 -1px 0 rgba(0,0,0,0.1);
    		background-position: 90px 3em;
    	}
    }

    @media screen and (max-width: 36.0625em) {


    .tarjeta {
    	padding: 0;
    }

    .card {
    	width: 90%;
    	margin-left: 5%;
    	margin-right: 5%;
    }

    .column p {
    	text-align: left;
    	font-size: 1.5em;
    }

    .column:nth-child(2) {
    	box-shadow: 0 -1px 0 rgba(0,0,0,0.1);
    	background-position: 90px 3em;
    }
    }

    :root{
      --bg-nav       : #1A252D;
      --bg           : #FBFBFE;
      --blue         : #59B3F3;
      --grey         : #A0A7AC;
      --white        : #FFFFFF;
      --header-height: 4rem;
    }

    body{
      background: var(--bg);
    }

    /* Estilos header */
    .header{
      height       : var(--header-height);
      width        : 100%;
      position     : fixed;
      top          : 0;
      background   : var(--white);
      border-bottom: 1px solid rgba(0,0,0,0.1);
    }

    .logo-img{
      width: 100px;
      height: auto;
      display: block;
    }




      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EFITRANS</a>
  </div>
</nav>
    <div class="pt-4">
        <div class="card" style="background: transparent; border: transparent;">
  <form method="post" action="re2.php"/>
  <div class="card-header" style="background: transparent; border: transparent;">
    <header><h1>Solicitar Registro</h1></header>
    <div class="alert alert-warning" role="alert">
  <cener>Usted enviara una solicitud de Ingreso y se le notificara si fue aprobada o rechazada!<br>
  
  </cener>


</div>
  </div>
  <div class="card-body" style="border-radius: 5%">
    <fieldset>
        <section>
        <label class="label"><b>Nombre Completo: <span style="color: red;">*</span></b></label>
        <input type="text" id="usuario" class="form-control" name="name" autocomplete="off" required/>
      </section>
      <section>
        <label class="label"><b>C.C: <span style="font-size: 10px; text-align: right;">(Opcional)</span> </b></label>
        <input type="text" id="usuario" class="form-control" name="cc" autocomplete="off">
      </section>
      <section>
        <label class="label"><b>Email:  <span style="color: red;">*</span></b></label>
        <input type="email" id="usuario" class="form-control" name="email" autocomplete="off" required/>
      </section>
      <label class="label"><b>Marca del Vehículo:  <span style="color: red;">*</span></b></label>
        <input type="text" id="usuario" class="form-control" name="marca" autocomplete="off" required/>
      </section>
      <label class="label"><b>Placa del Vehículo::  <span style="color: red;">*</span></b></label>
        <input type="text" id="usuario" class="form-control" name="placa" autocomplete="off" required/>
      </section>
      <section>
        <label class="label"><b>Nombre de Usuario: <span style="color: red;">*</span></b></label>
        <input type="text" id="usuario" class="form-control" name="nick" autocomplete="off" required/>
      </section>
      <section>
        <label class="label"><b>Contraseña: <span style="color: red;">*</span></b></label>
        <input type="text" id="password" class="form-control" name="pass" autocomplete="off"/>
      </section>
      <fieldset class="form-group">
			<div class="fila">
			    <label class="label"><b>Seleccione un Rol: <span style="color: red;">*</span></b></label>
				<select name="rol" id="" class="form-control">
					<!--<option value="1">Usuario</option>-->
					<option value="0">Conductor</option>
				</select>
			</div>
		</fieldset>	
      <section>
        <label class="label"><b>Teléfono de Contacto: <span style="color: red;">*</span></b></label>
        <input type="number" id="password" class="form-control" name="tlf" autocomplete="off"/>
      </section>
      <label class="label"><b>WhatsApp: <span style="color: red;">*</span></b></label>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">+57</span>
  </div>
  <input type="number" id="password" class="form-control" name="was" autocomplete="off"/></div>
</div>
    </fieldset><br>
    <input type="submit" class="btn btn-success btn-lg btn-block" name="apoyo" value="Enviar"/>
    <footer>


    </footer>
  </form></div></div></div><br><br><br><br>

  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<?php
if(isset($_POST['apoyo'])){
    $name = $_POST['name'];
    $cc = $_POST['cc'];
    $email = $_POST['email'];
    $marca = $_POST['marca'];
    $placa = $_POST['placa'];
    $nick = $_POST['nick'];
    $contra = $_POST['pass'];
    $rol = $_POST['rol'];
    $tlf = $_POST['tlf'];
    $was = "+57".$_POST['was'];
  $found=false;
			$sql1= "select * from user where nick=\"$_POST[nick]\"";
			$query = $mysqli->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
                break;
			}

            if($found){
				print "<script>
      Swal.fire({
        type: 'info',
        title: 'Ya existe ese Usuario',
        text: 'Seleccione otro nombre de usuario',
        showConfirmButton: true
    })
      </script>";
                exit();
            }
    $sql = $mysqli->query("INSERT INTO user (nick, pass, tipo, tlf, whatsapp, nombre, cc, email, activo, marca, placa) VALUES ('$nick','$contra', '$rol', '$tlf', '$was', '$name', '$cc', '$email', '0', '$marca', '$placa')");
    $result=$mysqli->query($sql);
    if($result>=0){
      ?>
        <script language="javascript"type="text/javascript">
        Swal.fire({
          type: 'success',
          title: 'Enviado!',
          text: 'Datos enviados',
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