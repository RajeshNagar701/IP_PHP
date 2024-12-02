<?php
$con=new mysqli("localhost","root","","laravel_pharmacy");
$sql="select * from customers";
$res=$con->query($sql);
while($fetch=$res->fetch_object())
{
	$arr[]=$fetch;		
}



foreach($arr as $c)
{
	$data="<tr>";
	$data.="<td>" .$c->id . "</td>";
	$data.="<td>" .$c->name . "</td>";
	$data.="<td>" .$c->username . "</td>";
	$data.="</tr>";
	echo $data;
}


?>
 