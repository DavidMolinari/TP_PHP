<?php
class Config
{
    static $confArray;

    public static function read($name)
    {
        return self::$confArray[$name];
    }

    public static function write($name, $value)
    {
        self::$confArray[$name] = $value;
    }

}

// db
Config::write('db.host', 'localhost');
//Config::write('db.port', '0000');
Config::write('db.basename', 'clientsoo');
Config::write('db.user', 'root');
Config::write('db.password', '');
$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
