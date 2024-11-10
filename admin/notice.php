<?php include 'header.php'; 
include '../includes/dbconnection.php';
$qry = "SELECT * FROM notices ORDER BY notice_date DESC";
$result = mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
?>

<h1 class="font-bold text-4xl">Notices</h1>
<hr class="h-1 bg-blue-600">

<div class="text-right my-5">
    <a href="createnotice.php" class="bg-blue-600 text-white px-4 py-3 rounded-lg">Add Notice</a>
</div>

<table class="w-full">
    <tr>
        <th class="border p-2 bg-gray-100">Notice Date</th>
        <th class="border p-2 bg-gray-100">Notice Title</th>
        <th class="border p-2 bg-gray-100">Action</th>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result))
    { ?>
    <tr class="text-center">
        <td class="border p-2"><?php echo $row['notice_date'];?></td>
        <td class="border p-2"><?php echo $row['notice_title']; ?></td>
        <td class="border p-2">
            <a href="editcategory.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 text-white px-4 py-1 rounded-lg">Edit</a>
            <a href="actioncategory.php?delete_id=<?php echo $row['id'];?>" class="bg-red-600 text-white px-4 py-1 rounded-lg" onclick="return confirm('Are you sure to Delete?');">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php include 'footer.php'; ?>