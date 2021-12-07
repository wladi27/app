<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>EFITRANS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="../bootstrap/css/sweetalert2.min.css">
<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/jquery-3.2.1.min.js"></script>
<script src="../bootstrap5/js/bootstrap.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>



    <!-- Bootstrap core CSS -->
<!--<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <style>
    *{
     margin    : 0;
     padding   : 0;
     box-sizing: border-box;
    }

    .btn{
    	
      width: 100%;
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


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  
</head>
<body class="bg-light">
<?php

      $query = "SELECT * FROM ofertas WHERE tipo >= '1' AND envia = '".$_SESSION['nick_act']."'";
      $ejecutar = $mysqli->query($query);
      $numero = $ejecutar->num_rows;
      
      while($fila = $ejecutar->fetch_array()) ;
      
    ?>
    <?php

      $query = "SELECT * FROM ofertas WHERE tipo >= '1' AND envia = '".$_SESSION['nick_act']."'";
      $result=$mysqli->query($query);
	  if ($row = $result->fetch_assoc()){
      print "<script>
      Swal.fire({
        type: 'info',
        title: 'NOTIFICACIÓN',
        text: 'Tiene una nueva notificación',
        showConfirmButton: true
    })
      </script>";
      }
      
    ?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">EFITRANS</a>
<a  href="r_msj.php" class="navbar-link">
<span style="padding: 2px 7px; background: #f21; border-radius: 50%; color: white;" class=" position-absolute label label-success "><b><?php echo $numero;?></b></span>
<svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg></a>
<button class="navbar-toggler position-relative d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

</header>

<div class="container-fluid">
<div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
<div class="position-sticky pt-3">
  <ul class="nav flex-column">
    <li class="nav-item">
      <h5><a class="nav-link active" aria-current="page" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
        Inicio
      </a></h5>
    </li>
    <li class="nav-item">
      <h5><a class="nav-link" href="r_msj.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
        Notificaciones
      </a></h5>
    </li>
    
    <li class="nav-item">
      <h5><a class="nav-link" href="../salir.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>
        Salir
      </a></h5>
    </li>
    
  </ul>


</nav></div></div>
<div class="pt-4">
