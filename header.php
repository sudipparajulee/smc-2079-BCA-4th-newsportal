<?php 
$qry = "SELECT * FROM categories ORDER BY priority";
include 'includes/dbconnection.php';
$resultcat = mysqli_query($conn, $qry);
include 'includes/closeconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex items-center justify-between px-12 shadow-md">
        <img src="https://smc.edu.np/wp-content/uploads/2023/11/smc-logo-circle.png" alt="" class="h-24">
        <div class="flex">
            <a href="index.php" class="p-2">Home</a>
            <?php 
            while($rowcat = mysqli_fetch_assoc($resultcat)){ 
                ?>
            <a href="" class="p-2"><?= $rowcat['name']; ?></a>
            <?php } ?>
            <a href="login.php" class="p-2">Login</a>
        </div>
    </nav>