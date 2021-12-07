<?php
 session_start();
 require('../cone.php');
 if (!isset($_SESSION['nick_act'])) {
     header("location: index.php");
 }
 ?>
 <?php include('nav.php');?>
 <div class="card" style="background: transparent; border: transparent;">
<table class="table table-bordered">
    <thead class="bg-warning">
        <tr>
            <th>DESTINO</th>
            <th>VALOR</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM tari ORDER BY destino ASC";
            $result = mysqli_query($mysqli,$query);

            while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['destino']; ?></td>
                    <td><b>COP $</b><?php echo $row['valor']; ?></td>
                </tr>
                <?php }
        ?>
    </tbody>
</table>
</div>


