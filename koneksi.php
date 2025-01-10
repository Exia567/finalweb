<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "u449701173_mantap";
$password = "Sazabi890";
$db = "u449701173_manta"; //nama database

//create connection
$conn = new mysqli($servername,$username,$password,$db, 3307);

//check apakah ada error connection
if($conn->connect_error){
	//jika ada, hentikan script dan tampilkan pesan error
	die("Connection failed : ".$conn->connect_error);
}

?>