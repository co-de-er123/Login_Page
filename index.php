<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <h2>Login</h2>
</head>
<body>
    <div class ="Sign-Up">
        <form action="process.php" method="post">
            <input type="text" placeholder="User Name" class="text" name="Username"></br>
            <input type="email" placeholder="email" class="text" name="email"></br>
            <input type="Password" placeholder="Password" class="text" name="Password"></br>
            <input type="Password" placeholder="Confirm Passwword" class="text" name="cpassword"></br>
            <input type="Submit" value="Sign Up" class="btn" name="btn-save">

        </form>

    </div>
</body>
</html>