<?php include 'header.php'; 
include '../includes/dbconnection.php';
$qry = "SELECT * FROM categories";
$result = mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
?>

<h1 class="font-bold text-4xl">Categories</h1>
<hr class="h-1 bg-blue-600">

<div class="text-right my-5">
    <a href="createcategory.php" class="bg-blue-600 text-white px-4 py-3 rounded-lg">Add Category</a>
</div>

<table class="w-full">
    <tr>
        <th class="border p-2 bg-gray-100">Order</th>
        <th class="border p-2 bg-gray-100">Category Name</th>
        <th class="border p-2 bg-gray-100">Action</th>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result))
    { ?>
    <tr class="text-center">
        <td class="border p-2"><?php echo $row['priority'];?></td>
        <td class="border p-2"><?php echo $row['name']; ?></td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg">Edit</a>
            <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php include 'footer.php'; ?>