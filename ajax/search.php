<?php
include_once '../config/config.php';
include_once '../lib/mysqlConnect.php';
$tmp=$_GET['key'];
$table=$_GET['table'];
$db=new mysqliMe($host,$user,$password,$dataBase);
$sql='select cityRating from '.$table." where cityName='".$tmp."'";
//echo $sql;
//$result=$db->query($sql);
//echo $result;
if($result=$db->query($sql))
{
	if($result->num_rows>0)
	{
		//echo $result->num_rows;
		while($row=$result->fetch_assoc())
		{
			echo $row['cityRating'];
			//array_push($arr,array('city'=>$row['cityName'],'rating'=>$row['cityRating']));
		}
	}
}

echo $tmp;
