<?php
    require_once('connection.php');
    if(isset($_POST['btn-save']))
    {
        $username =mysqli_real_escape_string($conn,$_POST['Username']);
        $email =mysqli_real_escape_string($conn,$_POST['email']);
        $password =mysqli_real_escape_string($conn,$_POST['Password']);
        $cpass =mysqli_real_escape_string($conn,$_POST['cpassword']);

        if(empty($username) || empty($email) || empty($password) || empty($cpass))
        {
            echo "Fill The Blanks";
        }
        if($password!=$cpass)
        {
            echo 'Password not matched';
        }
        else
        {
            $sql="Insert into studenttb(uname,email,password) values ('$username','$email','$password')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo 'Value Entered';
            }
            else
            {
                echo 'Check Query';
            }
        }
    }
?>
