<?php 
$dbhost= 'localhost';
$dbname= 'vitamind';
$dbuser= 'root';
$dbpass='';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($connection ->connect_error){
	die($connection->connect_error);
}
//issues a query to MySQL, outputting an error msg if it fails
function queryMysql($query)
{
	global $connection;
	$result = $connection->query($query);
	if(!$result){
		die($connection->error);
	}
	return $result;
}

?>