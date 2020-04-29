<?php
$connection = mysqli_connect('localhost', 'manan', 'shreya1122', 'i6378412_wp1');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'i6378412_wp1');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}