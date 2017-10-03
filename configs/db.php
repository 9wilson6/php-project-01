<?php 
require 'config.php';
//creat connection
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//checck if there is connection
if (mysqli_connect_errno()) {
	//if no connection do this
	echo "failed to connect". mysqli_connect_errno();
}
 ?>