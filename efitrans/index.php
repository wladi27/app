<?php
 session_start();
 if (isset($_SESSION['nick_act'])) {
     header("location: home.php");
 }
 require('cone.php');
 if (isset($_POST['login'])) {
     if (!empty($_POST['member_name']) && !empty($_POST['member_password'])) {
         $name = mysqli_real_escape_string($mysqli, $_POST['member_name']);
         $pass = mysqli_real_escape_string($mysqli, $_POST['member_password']);
         $sql = "SELECT * FROM user where nick='".$name."' AND activo='2' AND pass='".$pass."'";
         $result = mysqli_query($mysqli, $sql);
         $user = mysqli_fetch_array($result);

         if ($user) {
             if (!empty($_POST['remember'])) {
                 setcookie("member_login", $name, time()+(10 * 365 * 24 * 60 * 60)); 
                 setcookie("member_password", $pass, time()+(10 * 365 * 24 * 60 * 60)); 
                 $_SESSION['nick_act'] = $name;
             }else {
                 if (isset($_COOKIE['member_login'])) {
                     setcookie("member_login", "");
                     $_SESSION['nick_act'] = $name;
                 }
                 if (isset($_COOKIE['member_password'])) {
                    setcookie("member_password", "");
                    $_SESSION['nick_act'] = $name;
                }
             }
             header("location:home.php");
             $_SESSION['nick_act'] = $name;
         }else {
             $mensaje = "ingreso invalido";
         }
     }else {
        $mensaje = "Ambos son campos requeridos";
     }
 }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EFITRANS</title>
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/hello-icon-152.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="white"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Hello World">
  <meta name="msapplication-TileImage" content="images/hello-icon-144.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
</head>
<body class="fullscreen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
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
        <br><br>
    <div style="background: transparent; border-color: transparent;" class="card">
      <div class="card-header" style="background: transparent; border-color: transparent;">
        <center><h1><b>Login</b></h1></center>
      </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <?php if (isset($mensaje)){echo '<p style="color: red;"><center>'.$mensaje.'</center></p><br>';} ?>
                <label  for="input">Nombre Usuario:</label>
                <input class="form-control" type="text" name="member_name" id="input"
                value="<?php if (isset($_COOKIE['member_login'])) {echo $_COOKIE['member_login'];}?>">
                <label  for="input">Cotraseña:</label>
                <input class="form-control" type="password" name="member_password" id="input" 
                value="<?php if (isset($_COOKIE['member_password'])) {echo $_COOKIE['member_password'];}?>">
                <div class="form-check">
                <label class="form-check-label for="">
                    <input class="form-check-input" type="checkbox" name="remember"<?php if (isset($_COOKIE['member_login'])){
                        ?> checked 
                    <?php }?>><i>Recuerda Siempre</i>
                </label><br>
                </div>
                <br>
                <button class="btn btn-success btn-block" name="login" type="submit">Iniciar Sesión</button>
            </form>
            <center><p>&iquest;A&uacute;n no tienes una Cuenta?<br> <a class="link" style="float: center;" href="re_o.php">Crear Nueva Cuenta</a></p></center>
        </div>
        </div>
    </div></div><br><br>
      <script src="js/main.js"></script>
        <script src="sw.js"></script>
</body>
</html>