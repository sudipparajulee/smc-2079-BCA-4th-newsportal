<?php include 'header.php'; 
$id = $_GET['id'];
include '../includes/dbconnection.php';
$qry = "SELECT * FROM categories WHERE id = $id";
$result = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($result);
include '../includes/closeconnection.php';
?>

<h1 class="font-bold text-4xl">Edit Category</h1>
<hr class="h-1 bg-blue-600">

<form action="actioncategory.php" method="POST" class="mt-5">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="Priority" name="priority" value="<?php echo $row['priority'];?>">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="Category Name" name="name" value="<?php echo $row['name']; ?>">
    <div class="flex justify-center mt-2">
        <button class="bg-blue-600 text-white px-4 py-3 rounded-lg" name="store">Update Category</button>
        <a href="category.php" class="bg-red-600 text-white px-4 py-3 rounded-lg ml-3">Cancel</a>
    </div>
</form>
<?php include 'footer.php'; ?>