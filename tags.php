<?php
include_once './config.php';
include_once './mysqlConnect.php';
$mysqli=new mysqliMe($host,$user,$password,$dataBase);
$query='SELECT cityName,cityRating FROM cloudtest';
$arr=array();
if($result=$mysqli->query($query))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			array_push($arr,array('city'=>$row['cityName'],'rating'=>$row['cityRating']));
		}
	}
}
//print_r($arr);
$result=array('tags'=>$arr);
//header('Content-Type:text/json');
echo json_encode($result);
$mysqli->close();
