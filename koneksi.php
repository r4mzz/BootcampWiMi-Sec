<?php
$koneksi = mysqli_connect(
    'localhost', //host
    'root', //username
    '', //password
    'bootcamp' //nama database
);

if($koneksi){
   // echo "connected!";
}else{
    echo "not connected!";
}