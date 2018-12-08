<?php 
try {
   $host = 'localhost';
   $dbname = 'dbkegiatan';
   $dbuser = 'siswa';
   $dbpass = '123456';

   $dbh = new PDO("pgsql:host=$host;dbname=$dbname",
   	$dbuser,$dbpass);
   $dbh->setAttribute(PDO::ATTR_ERRMODE ,
     PDO::ERRMODE_EXCEPTION
   	);
}catch(PDOException $e){
	echo $e->getMessage();
}
?>