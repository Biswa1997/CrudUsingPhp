<?php
$conn = mysqli_connect("localhost", "root", "", "blog");
if(!$conn){
    die('Connection failed'. mysqli_connect_error());
}
