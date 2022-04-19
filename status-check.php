<?php
require_once('db.php');






  $q="SELECT * FROM `status` WHERE username='bb'";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
        echo $status =   $row['value'];
          
			}


?>