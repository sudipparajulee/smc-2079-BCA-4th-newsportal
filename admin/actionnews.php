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

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_POST['oldpath'];
    if($_FILES['photopath']['name'] != '')
    {
        $photopath = $_FILES['photopath']['name'];
        $tmp_name = $_FILES['photopath']['tmp_name'];
        $filename = time().$photopath;
        $path = "../uploads/".$filename;
        move_uploaded_file($tmp_name, $path);
        //delete old file
        unlink("../uploads/".$_POST['oldpath']);
    }
    
    //start connection
    include '../includes/dbconnection.php';
    $qry = "UPDATE news SET category_id=$category_id, date='$date', title='$title', description='$description', photopath='$filename' WHERE id=$id";

    if(mysqli_query($conn, $qry))
    {
        echo '<script>alert("News Updated Successfully")</script>
        <script>window.location.href = "news.php";</script>';
    }
    else
    {
        echo "Error: " . $qry . "<br>" . mysqli_error($conn);
    }

    //close connection
    include '../includes/closeconnection.php';
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    //start connection
    include '../includes/dbconnection.php';
    $qry = "SELECT photopath FROM news WHERE id=$id";
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    unlink("../uploads/".$row['photopath']);
    $qry = "DELETE FROM news WHERE id=$id";

    if(mysqli_query($conn, $qry))
    {
        echo '<script>alert("News Deleted Successfully")</script>
        <script>window.location.href = "news.php";</script>';
    }
    else
    {
        echo "Error: " . $qry . "<br>" . mysqli_error($conn);
    }

    //close connection
    include '../includes/closeconnection.php';
}