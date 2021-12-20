<?php
function conn()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escuela";


$connection= new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
	die("Conexión fallida: ".$connection->connect_error);
	return 1;
}
else
{

 return $connection;

} 


}


function consgrupos($connection)
{


$cons="SELECT grupo FROM `grupo`";

if($connection)
{
	$grupos=$connection->query($cons);


	if($grupos->num_rows>0)
	{

		return $grupos;
	
			
	}
	else return $grupos;


}

?>