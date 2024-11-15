<?php include 'header.php'; 
include '../includes/dbconnection.php';
$qry = "SELECT news.*,categories.name FROM news INNER JOIN categories ON news.category_id = categories.id ORDER BY date DESC";
$result = mysqli_query($conn, $qry);
include '../includes/closeconnection.php';
?>
<h1 class="font-bold text-4xl">All News</h1>
<hr class="h-1 bg-blue-600">

<div class="text-right my-5">
    <a href="createnews.php" class="bg-blue-600 text-white px-4 py-3 rounded-lg">Add News</a>
</div>

<table class="w-full">
    <tr>
        <th class="border p-2 bg-gray-100">News Date</th>
        <th class="border p-2 bg-gray-100">News Image</th>
        <th class="border p-2 bg-gray-100">News Title</th>
        <th class="border p-2 bg-gray-100">News Description</th>
        <th class="border p-2 bg-gray-100">Category</th>
        <th class="border p-2 bg-gray-100">Action</th>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result))
    { ?>
    <tr class="text-center">
        <td class="border p-2"><?= $row['date'] ?></td>
        <td class="border p-2">
            <img src="../uploads/<?= $row['photopath'] ?>" alt="" class="w-20 h-20 object-cover">
        </td>
        <td class="border p-2"><?= $row['title']; ?></td>
        <td class="border p-2"><?= $row['description']; ?></td>
        <td class="border p-2"><?= $row['name']; ?></td>
        <td class="border p-2">
            <a href="editnews.php?id=<?= $row['id']; ?>" class="bg-blue-600 text-white px-4 py-1 rounded-lg">Edit</a>
            <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg" onclick="return confirm('Are you sure to Delete?');">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php include 'footer.php'; ?>