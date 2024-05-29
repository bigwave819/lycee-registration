<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT || DATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="user-box">
        <h2>student registration in php</h2>
        <form method="POST">
            <label>username:</label>
            <input type="text" name="name">
            <label>age:</label>
            <input type="number" name="age" value="1">
            <label>email:</label>
            <input type="email" name="email">
            <label>phone:</label>
            <input type="number" name="phone">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>
<?php

include('connection.php');

if (isset($_POST['submit'])) {
    # code...
    $user= $_POST['name'];
    $age= $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO crud(name, age, email, phone_no) VALUES('$user', '$age', '$email', '$phone')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.alert('successfully inserted the data')</script>";
        header('location:retrive.php');
    }
}

?>