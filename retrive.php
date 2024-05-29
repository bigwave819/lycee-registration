<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETRIEVING || THE DATA</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
        *{
    font-family: Verdana, sans-serif;
        }
        a{
        text-decoration: none;
        color: black;
        padding: 10px;
        }
        a:hover{
        color: white;
        }
        .del{
            color: red;
            font-size: 20px;
        }
        .del:hover{
            color: black;
        }
        .upd{
            color: blue;
            font-size: 20px;
        }
         .upd:hover{
            color: black;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>welcome to our student registration in lycee de nyanza</h2>
    <button class="btn btn-primary btn-lg pt-2 pb-2 mt-3 mb-3"><a href="insert_form.php">add new student</a></button>
<table class="table">
        <tr>
        <th>names</th>
        <th>age</th>
        <th>email</th>
        <th>phone no:</th>
        <th colspan="2">action</th>
        </tr>
        <?php 
        include('connection.php');
        $sql= "SELECT * FROM crud";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone_no']; ?></td>
            <td class="pt-3 pb-3"><a href="delete.php?id=<?php echo $row['id']; ?>" class="del"><i class="fa-solid fa-trash fa-fw"></i></a></td>
            <td class="pt-3 pb-3"><a href="update.php?id=<?php echo $row['id']; ?>" class="upd"><i class="fa-solid fa-pen-to-square fa-fw"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </table></div>
</body>
</html>