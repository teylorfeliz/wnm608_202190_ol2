<?php
    
    function MYSQLIAuth() {
        return [
            "localhost", //mysql host
            "joyshih_wnm608", //mysql user
            "Aa123456789!", //mysql pass
            "joyshih_wnm608" //mysql database

        ];


    }

    function PDOAuth() {
        return [
            "mysql:host=localhost;dbname=joyshih_wnm608", //host and database name
            "joyshih_wnm608", //mysql user
            "Aa123456789!", //mysql pass
            [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]

        ];


    }


