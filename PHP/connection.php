<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "himtik";

// Create connection
$con = mysqli_connect($host,$user,$password);
if ($con){
	//echo "Database MYSQL <b>berhasil</b> dikoneksikan<br>";
}else {
	echo"Database  MYSQL <b>gagal</b> dikoneksikan<br>";
}

$hasil=mysqli_select_db($con,$db);
if ($hasil){
	//echo "Database $db berhasil dipilih";
}else {
	echo "Database $db gagal dipilih";
}


?>