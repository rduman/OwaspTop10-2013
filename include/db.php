<?php
header('Content-type:text/html; charset=utf-8');
try{  
$db=new PDO("mysql:host=localhost;dbname=OWASPTEST;charset=utf8",'root','123456');
}
catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}
?>