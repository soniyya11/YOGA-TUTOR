<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='yoga';
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn)
{
    echo "error";
}

?>