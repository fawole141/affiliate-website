<?php


session_start();
$username = $_SESSION['user_login'];

$conn = mysqli_connect('localhost','root','','naijaopinion');

if($conn){
echo 'connected';
}else{
	echo 'not connected';
}

$q="SELECT * FROM minning WHERE username='$username'";
$q=mysqli_query($conn,$q);
 $result=mysqli_num_rows($q);




$date=date("Y-m-d");
$q="SELECT * FROM minning WHERE username='$username' AND date='$date'";
$q=mysqli_query($conn,$q);
  $result1=mysqli_num_rows($q);

if($result1>4){
header("location: timer.php?msg=minning is completed for today");
exit();
}else{

$q="INSERT INTO `minning` (`id`, `username`, `amount`, `type`,`date`) VALUES (NULL, '$username', '100', 'type','$date')";
mysqli_query($conn,$q);


header("location: timer.php?msg=minning successful few more to go");
exit();
}



 if($result>4){
header("location: timer.php?msg=minning is completed for today");

 }else{


	$date=date("Y-m-d");

$q="INSERT INTO `minning` (`id`, `username`, `amount`, `type`,`date`) VALUES (NULL, '$username', '100', 'type','$date')";
mysqli_query($conn,$q);


header("location: timer.php?msg=minning successful few more to go");

}

?>