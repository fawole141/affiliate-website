<?php 
require_once('db.php');

     $q="SELECT * FROM wp_users WHERE user_login='Highbeemanni'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
         $id =   $row['ID'];
          
			}
 
  
$q="SELECT * FROM activity_logs WHERE user_id='$id'";
$q=mysqli_query($conn,$q);

while($row=mysqli_fetch_assoc($q)){
	echo $points= $row['points'].'<br>';
echo $row['log_date'].'<br>';
echo $row['point_type'].'<br>';
	}




?>