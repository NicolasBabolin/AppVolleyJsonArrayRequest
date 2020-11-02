<?php

$user_name = "etecia";
$password = "123456";
$host = "localhost";
$db_name = "dbFilmes";

$con = mysqli_connect($host,$user_name,$password,$db_name);

$sql = "select * from tbTitulos;";

$result = mysqli_query($con,$sql);

$response = array();

while ($row = mysqli_fetch_array($result)) {
	array_push($response, array("Nome"=>$row["nome"],"Tipo"=>$row["tipo"],"Locado"=>$row["locado"]));
}
	echo json_encode($response);
?>