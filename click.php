<?php
session_start();
require_once("db.php");
   $id=$_GET['id'];
 $user_id=$_SESSION['ID'];

 

 $q="SELECT * FROM  activity_logs WHERE post_id='$id' AND user_id='$user_id'";
 $q=mysqli_query($conn,$q);
 $result=mysqli_num_rows($q);

if($result>0){

header("location:advert-section.php?msg=you have earned before");
}else{

 $date=date('Y-m-d');
		$q="INSERT INTO `activity_logs` (`id`, `user_id`, `points`, `post_id`, `point_type`, `log_date`) VALUES (NULL, '$user_id', '300', '$id', 'sponsor post', '2020-01-23')";
         mysqli_query($conn,$q);
			

			header("location:advert-section.php?msg=success");
}
?>