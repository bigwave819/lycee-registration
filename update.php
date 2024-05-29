<?php

include('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql= "SELECT * FROM crud WHERE id='$id'";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "UPDATE crud SET name='$name', age='$age', email='$email', phone_no='$phone' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:retrive.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    font-family: Verdana, sans-serif;
}
body{
    display: flex;
    align-items: center;
    background: white;
    align-items: center;
}
.user-box{
    max-width: 400px;
    margin: 0 auto;
    background: #ddd;
    padding: 20px 40px;
    border-radius: 20px;
    box-shadow: 15px 5px 30px rgba(0, 0, 0, 0.4);
}
h2{
    color: #777;
}
label, input{
    display: block;
}
label{
    padding-top: 5px;
}
input[type="text"],
input[type="email"],
input[type="number"]{
    margin-top: 10px;
    width: 100%;
    outline: none;
    border: 1px solid #777;
    padding: 15px 0px;
    border-radius: 10px;
    font-size: large;
}

input[type="submit"]{
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    font-size: 18px;
    border: none;
    border-radius: 10px;
    background-color: aqua;
    color: #022;
}
    </style>
</head>
<body>
<div class="user-box">
        <h2>student registration in php</h2>
        <form method="POST">
            <label>username:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="enter name ...">
            <label>age:</label>
            <input type="number" name="age" value="<?php echo $row['age']; ?>" placeholder="enter your age ...">
            <label>email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="enter your email ...">
            <label>phone:</label>
            <input type="number" name="phone" value="<?php echo $row['phone_no']; ?>" placeholder="+250 ... ... ...">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>