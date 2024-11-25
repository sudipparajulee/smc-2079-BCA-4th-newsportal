<?php include 'header.php'; 
$qrycat = "SELECT * FROM categories ORDER BY priority";
$id = $_GET['id'];
$qrynews = "SELECT * FROM news WHERE id = $id";
include '../includes/dbconnection.php';
$resultcat = $conn->query($qrycat);
$resultnews = $conn->query($qrynews);
$row = mysqli_fetch_assoc($resultnews);
include '../includes/closeconnection.php';
?>

<h1 class="font-bold text-4xl">Edit News</h1>
<hr class="h-1 bg-blue-600">

<form action="actionnews.php" method="POST" class="mt-5" enctype="multipart/form-data">
    <select class="w-full border p-3 my-2 rounded-lg" name="category_id">
        <?php while($rowcat = $resultcat->fetch_assoc()){ ?>
        <option value="<?= $rowcat['id'] ?>"
        <?php if($rowcat['id'] == $row['category_id']){ echo 'selected'; } ?>
        ><?= $rowcat['name'] ?></option>
        <?php } ?>
    </select>
    <input type="date" class="w-full border p-3 my-2 rounded-lg" name="date" value="<?= $row['date'] ?>">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="News Title" name="title" value="<?= $row['title'] ?>">
    <textarea class="w-full border p-3 my-2 rounded-lg" placeholder="News Description" name="description"><?= $row['description'];?></textarea>
    <p>Current Picture:</p>
    <img src="../uploads/<?= $row['photopath'] ?>" alt="" class="w-32 h-32 object-cover">
    <input type="file" class="w-full border p-3 my-2 rounded-lg" name="photopath">
    <input type="hidden" name="oldpath" value="<?= $row['photopath']?>">
    <input type="hidden" name="id" value="<?= $row['id']?>">
    <div class="flex justify-center mt-2">
        <button class="bg-blue-600 text-white px-4 py-3 rounded-lg" name="update">Update News</button>
        <a href="news.php" class="bg-red-600 text-white px-4 py-3 rounded-lg ml-3">Cancel</a>
    </div>
</form>
<?php include 'footer.php'; ?>