<?php 
//password root chameli
    $conn=mysqli_connect('localhost','root','chameli','bio_research');

    if(mysqli_connect_errno()){
        echo 'failed to connect',mysqli_connect_errno();
    }
    
?>