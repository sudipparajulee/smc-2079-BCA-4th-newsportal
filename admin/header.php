<?php
session_start();
if(!isset($_SESSION['check_login'])){
    header('location: ../login.php');
}
// check for base_url
$page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMC News Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For active url  -->
    <style>
        .active{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <div class="flex">
        <div class="w-56 h-screen bg-gray-100 shadow-lg">
            <img src="https://smc.edu.np/wp-content/uploads/2023/11/smc-logo-circle.png" alt="" class="h-24 mt-5 mx-auto">
            <ul class="mt-5">
                <li class="px-2">
                    <a href="index.php" class="block hover:bg-red-500 p-4 text-lg font-bold rounded-lg hover:text-xl <?php 
                    if($page == 'index.php')
                    { 
                        echo 'active';
                    } 
                    ?>">Dashboard</a>
                </li>
                <li class="px-2">
                    <a href="category.php" class="block hover:bg-red-500 p-4 text-lg font-bold rounded-lg hover:text-xl <?php 
                    if($page == 'category.php')
                    { 
                        echo 'active';
                    } 
                    ?>">Categories</a>
                </li>
                <li class="px-2">
                    <a href="news.php" class="block hover:bg-red-500 p-4 text-lg font-bold rounded-lg hover:text-xl <?php 
                    if($page == 'news.php')
                    { 
                        echo 'active';
                    } 
                    ?>">News</a>
                </li>
                <li class="px-2">
                    <a href="notice.php" class="block hover:bg-red-500 p-4 text-lg font-bold rounded-lg hover:text-xl <?php 
                    if($page == 'notice.php')
                    { 
                        echo 'active';
                    } 
                    ?>">Notices</a>
                </li>
                <li class="px-2">
                    <a href="logout.php" class="block hover:bg-gray-200 p-4 text-lg font-bold rounded-lg hover:text-xl">Logout</a>
                </li>
                
            </ul>
        </div>
        <div class="p-4 flex-1">