<?php

function MYSQLIAuth (){
	return [

	"localhost", 	//mysql host
	"jyp7014wnm608",	//mysql user name
	"QWer12QWer",	//mysql user password
	"jyp7014wnm608" 	//mysql database name
];
}

function PDOAuth(){
	return [

	"mysql: host=localhost;dbname=jyp7014wnm608", 	//host and database name
	"jyp7014wnm608",	//mysql user name
	"QWer12QWer",	//mysql user password
	[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
];
}
