<?php
// Declaration server, username, password, and database
$servername="localhost";
$username="root";
$password="";
$dbname="db_pegawai";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// Create Table
$sql= "CREATE TABLE tabel_pegawai(
id_pg INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_pg varchar(30) NOT NULL,
email_pg varchar(30) NOT NULL,
nop_g char(15) NOT NULL,
jk_pg varchar(15) NOT NULL,
alamat_pg varchar(50) NOT NULL,
jabatan varchar(30) NOT NULL
)";
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Stop Connection
mysqli_close($conn);
?>