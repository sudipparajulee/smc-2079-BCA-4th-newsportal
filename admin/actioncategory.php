
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

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "UPDATE categories SET priority = $priority, name = '$name' WHERE id = $id";
    //execute query
    include '../includes/dbconnection.php';
    if(mysqli_query($conn,$qry))
    {
        echo '<script>alert("Category updated successfully");
            window.location.href = "category.php";
        </script>';
    }
    else
    {
        echo "Cannot Update Category";
    }
    include '../includes/closeconnection.php';
}

if(isset($_GET['delete_id']))
{
    //delete data here
    $id = $_GET['delete_id'];
    $qry = "DELETE FROM categories WHERE id = $id";
    include '../includes/dbconnection.php';
    if(mysqli_query($conn,$qry))
    {
        echo '<script>alert("Category deleted successfully");
        window.location.href = "category.php";
        </script>';
    }
    else
    {
        echo "Cannot Delete Category";
    }
    include '../includes/closeconnection.php';
}

?>