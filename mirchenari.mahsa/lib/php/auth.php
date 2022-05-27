<?php

function MYSQLIAuth(){
	return[
 "localhost",   //mysql host 
"mahsas",  //  mysql user name
"mahsas",  // mysql user password
"mahsas"   // mysql database name
	];
}



function PDOAuth(){
	return[
 "mysql:host=localhost;dbname=mahsas",   //host and data base name
"mahsas",  //  mysql user name
"mahsas",  // mysql user password

[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}