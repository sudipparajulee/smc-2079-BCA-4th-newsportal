<?php include 'header.php'; 
$catid = $_GET['catid'];
$qrycat = "SELECT * FROM categories WHERE id=$catid";
$qrynews = "SELECT * FROM news WHERE category_id=$catid ORDER BY date DESC";
include 'includes/dbconnection.php';
$resultcat = mysqli_query($conn,$qrycat);
$rowcat = mysqli_fetch_assoc($resultcat);
$resultnews = mysqli_query($conn, $qrynews);
include 'includes/closeconnection.php';
?>

<div class="px-12">
    <h2 class="font-bold my-5 py-2 px-2 border-l-4 border-blue-600 text-xl"><?= $rowcat['name'] ?> News</h2>
    <div class="grid grid-cols-4 my-10 gap-5">
        <?php while($row = mysqli_fetch_assoc($resultnews)){ ?>
        <a href="viewnews.php?newsid=<?= $row['id'];?>" class="p-2 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 transition">
            <img src="uploads/<?= $row['photopath'];?>" alt="" class="w-full h-40 object-cover">
            <h3 class="font-bold text-md my-2"><?= $row['title']; ?></h3>
            <p class="text-sm line-clamp-3"><?= $row['description']; ?></p>
        </a>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>
    