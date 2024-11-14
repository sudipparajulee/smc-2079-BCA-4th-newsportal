<?php
if(isset($_POST['store']))
{
    $category_id = $_POST['category_id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_FILES['photopath']['name'];
    $tmp_name = $_FILES['photopath']['tmp_name'];
    $filename = time().$photopath;
    $path = "../uploads/".$filename;
    move_uploaded_file($tmp_name, $path);
    
    //start connection
    include '../includes/dbconnection.php';
    $qry = "INSERT INTO news (category_id, date, title, description, photopath) VALUES ('$category_id', '$date', '$title', '$description', '$filename')";

    if(mysqli_query($conn, $qry))
    {
        echo '<script>alert("News Added Successfully")</script>
        <script>window.location.href = "news.php";</script>';
    }
    else
    {
        echo "Error: " . $qry . "<br>" . mysqli_error($conn);
    }

    //close connection
    include '../includes/closeconnection.php';
}