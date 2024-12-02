<?php include 'header.php'; 
$qry = "SELECT * FROM news ORDER BY date DESC LIMIT 4";
$qrynotice = "SELECT * FROM notices ORDER BY notice_date DESC";
include 'includes/dbconnection.php';
$resultnews = mysqli_query($conn, $qry);
$resultnotice = mysqli_query($conn, $qrynotice);
include 'includes/closeconnection.php';
?>


<div class="px-12 flex mt-5">
    <p class="bg-red-600 text-white px-10 py-5">Notices</p>
    <marquee class="w-full bg-gray-100 p-5 text-lg font-bold">
        <?php while($row = mysqli_fetch_assoc($resultnotice)){
            echo $row['notice_title'];
            echo " | ";
         } ?>
    </marquee>
</div>

<div class="px-12">
    <h2 class="font-bold my-5 py-2 px-2 border-l-4 border-blue-600 text-xl">Latest News</h2>
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
    