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