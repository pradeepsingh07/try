<?php
$dbname='api';
$username='root';
$password='';
$hostname='localhost';


$con=new PDO("mysql:host=$hostname;dbname=$dbname","$username","$password");
// if($con){echo json_encode(array('status'=>'true'));}else{echo json_encode(array('status'=>'false'));}



?>