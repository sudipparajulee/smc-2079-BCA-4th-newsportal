<?php 
if(isset($_POST['store']))
{
    $notice_date = $_POST['notice_date'];
    $notice_title = $_POST['notice_title'];
    $qry = "INSERT INTO notices(notice_date,notice_title) VALUES('$notice_date','$notice_title')";
    //execute query
    include '../includes/dbconnection.php';
    if(mysqli_query($conn,$qry))
    {
        echo '<script>alert("Notice created successfully");
            window.location.href = "notice.php";
        </script>';
    }
    else
    {
        echo "Cannot Create Notice";
    }
    include '../includes/closeconnection.php';
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $notice_date = $_POST['notice_date'];
    $notice_title = $_POST['notice_title'];
    $qry = "UPDATE notices set notice_date='$notice_date', notice_title='$notice_title' WHERE id=$id";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo '<script>alert("Notice updated successfully");
            window.location.href = "notice.php";
        </script>';
    }
    else
    {
        echo "Cannot Update Notice";
    }
    include '../includes/closeconnection.php';
}

if(isset($_GET['delete_id']))
{
    $id = $_GET['delete_id'];
    $qry = "DELETE FROM notices WHERE id=$id";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if($result)
    {
        echo '<script>alert("Notice deleted successfully");
            window.location.href = "notice.php";
        </script>';
    }
    else
    {
        echo "Cannot Delete Notice";
    }
    include '../includes/closeconnection.php';
}