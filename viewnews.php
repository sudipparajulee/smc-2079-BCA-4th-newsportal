<?php include 'header.php'; 
$newsid = $_GET['newsid'];
$qrynews = "SELECT * FROM news WHERE id=$newsid";
include 'includes/dbconnection.php';
$resultnews = mysqli_query($conn,$qrynews);
$news = mysqli_fetch_assoc($resultnews);
$catid = $news['category_id'];
$qryrelated = "SELECT * FROM news WHERE category_id=$catid AND id!=$newsid LIMIT 5";
$resultrelated = mysqli_query($conn,$qryrelated);
include 'includes/closeconnection.php';
?>

<div class="grid grid-cols-4 gap-5 px-10 mt-10">
    <div class="col-span-3">
        <img src="uploads/<?=$news['photopath']?>" alt="" class="w-full">
        <p class="my-3 text-red-600">
            <i class="ri-calendar-2-line"></i>
            <?= $news['date']; ?>
        </p>
        <h2 class="font-bold text-2xl"><?= $news['title'];?></h2>
        <p class="mt-3 text-gray-800 text-justify">
            <?= $news['description']; ?>
        </p>
    </div>
    <div>
        <p class="font-bold text-xl border-b-4 border-red-600">Related News</p>
        <div class="grid gap-4 mt-5">
            <?php 
            while($rownews = mysqli_fetch_assoc($resultrelated)) { ?>
            <a href="viewnews.php?newsid=<?=$rownews['id'];?>" class="flex border p-2 shadow rounded-lg hover:-translate-y-1 transition hover:shadow-md">
                <img src="uploads/<?= $rownews['photopath'];?>" alt="" class="w-20 h-16 object-cover rounded-lg">
                <h3 class="font-bold text-sm ml-2 line-clamp-3">
                    <?= $rownews['title']; ?>
                </h3>
            </a>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>