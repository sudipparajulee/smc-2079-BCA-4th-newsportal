
<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "INSERT INTO categories(priority,name) VALUES($priority,'$name')";
    //execute query
    include '../includes/dbconnection.php';
    if(mysqli_query($conn,$qry))
    {
        echo '<script>alert("Category created successfully");
            window.location.href = "category.php";
        </script>';
    }
    else
    {
        echo "Cannot Create Category";
    }
    include '../includes/closeconnection.php';
}

?>