<?php
$connection=mysqli_connect('localhost','root','','karma');
if (!$connection)
{
    die("Connection error: ".mysqli_connect_error());
}
?>