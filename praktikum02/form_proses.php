<?php
if(isset($_POST["remember"])) {
    $remember = $_POST["remember"];;
}
else{
    $remember = "not remember";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Proses</title>
</head>
<body>
    <h1>Submit form dengan method POST</h1>
    <p>Welcome <?php echo $_POST ["username"]; ?></p>
    <p>Your password is <?php echo $_POST ["password"]; ?></p>
    <p>Remember me is <?php echo $_POST ["remember"]; ?></p>
    <p><a href="form_login7.html"></a> Back to login</p> 
</body>
</html>