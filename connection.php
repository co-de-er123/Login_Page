<?php
    $conn=mysqli_connect('localhost','root','','student');
    if(!$conn)
    {
        echo "Check Your Connection";
    }
    else
    {
        echo "Connected!!";
    }
?>