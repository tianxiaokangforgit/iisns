<?php
////////////////////
// This file contains the database access information.
// This file is needed to establish a connection to MySQL
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=172.16.18.9;dbname=iisns',
    'username' => 'root',
    'password' => 'hrbbwx.com',
    'tablePrefix' => 'pre_',
    'enableSchemaCache' => true //No need to modify
];
