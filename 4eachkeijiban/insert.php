<?php 
mb_internal_encoding("utf8");
 
//$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root" ,"");
try{
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root" ,"mysql");
}
catch( Exception $ex ){
    echo 'err';
}
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
 
header("Location:http://localhost/4each_keijiban/index.php"); 
?>