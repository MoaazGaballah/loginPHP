<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_password','rootpassword');
define('DB_DATABASE','database');
$db= mysqli_connect(DB_SERVER, DB_USERNAME, DB_password, DB_DATABASE );
?>