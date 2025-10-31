<?php

try{
    
    $config = require 'config.php';
    
    $db_path = __DIR__ . $config.$DB_PATH;
    
    $db = new SQLite3($db_path);
    // $db = new PDO('sqlite:' . __DIR__ . '/my_database.sqlite');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(error){
    echo(error.$messsage);

}