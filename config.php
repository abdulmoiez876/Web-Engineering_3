<?php
$connection = mysqli_connect('localhost','root','','assignment3_we');
if(!$connection) {
    echo 'connection failed ' . mysqli_error($connection);
}
?>