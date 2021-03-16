<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','shijarestaurant_db');

$dbc=msqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_error()){
    die("Lidhja e databzaes deshtoi", mysqli_error());

}
?>