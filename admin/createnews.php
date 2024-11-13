<?php include 'header.php'; 
$qrycat = "SELECT * FROM categories ORDER BY priority";
include '../includes/dbconnection.php';
$resultcat = $conn->query($qrycat);
include '../includes/closeconnection.php';
?>

<h1 class="font-bold text-4xl">Create News</h1>
<hr class="h-1 bg-blue-600">

<form action="actionnews.php" method="POST" class="mt-5" enctype="multipart/form-data">
    <select class="w-full border p-3 my-2 rounded-lg" name="category_id">
        <?php while($rowcat = $resultcat->fetch_assoc()){ ?>
        <option value="<?= $rowcat['id'] ?>"><?= $rowcat['name'] ?></option>
        <?php } ?>
    </select>
    <input type="date" class="w-full border p-3 my-2 rounded-lg" name="date">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="News Title" name="title">
    <textarea class="w-full border p-3 my-2 rounded-lg" placeholder="News Description" name="description"></textarea>
    <input type="file" class="w-full border p-3 my-2 rounded-lg" name="photopath">
    <div class="flex justify-center mt-2">
        <button class="bg-blue-600 text-white px-4 py-3 rounded-lg" name="store">Create News</button>
        <a href="news.php" class="bg-red-600 text-white px-4 py-3 rounded-lg ml-3">Cancel</a>
    </div>
</form>
<?php include 'footer.php'; ?>