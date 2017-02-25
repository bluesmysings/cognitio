<?php

ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');


$connect= new PDO('mysql:host=localhost;dbname=giova739_cognitio', 'giova739_giova73','cgrrms2s210+', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 



function verifica_sql($sql){
	$strInvalida = array("'","\\","/","\"","&","%","+","*",";","=","#","--","SELECT","INSERT","DELETE","UPDATE","FROM","LIKE",
						 "JOIN","WHERE","DROP","CREATE","OR","INTO","XP_","SP_","http","cmd","ftp",".dat",".txt",".gif","wget","show","tables","#");
	$strTextoOK = $sql;
	$strTextoOK = str_replace($strInvalida, "", $strTextoOK);
	return $strTextoOK;
}
?>
