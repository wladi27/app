<?php
 session_start();
 require('cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 $query = "SELECT * FROM user where nick='".$_SESSION['nick_act']."'";
 $result=$mysqli->query($query);
 if ($row = $result->fetch_assoc()){
     if($row["tipo"]== 0){?>
         <script language="javascript"type="text/javascript">
              window.location.href= 'conductor/index.php';
         </script>
         <?php
     }elseif ($row["tipo"]== '3') {?>
				<script language="javascript"type="text/javascript">
					 window.location.href= 'admin/index.php';
				</script>
				<?php
            }else{?>
         <script language="javascript"type="text/javascript">
              window.location.href= 'user/index.php';
         </script><?php
     }
 }
 ?>