<?php include 'header.php'; 
$qrycat = "SELECT count('id') as total FROM categories";
$qrynews = "SELECT count('id') as total FROM news";
$qrynotice = "SELECT count('id') as total FROM notices";
include '../includes/dbconnection.php';
$resultcat = mysqli_query($conn,$qrycat);
$resultnews = mysqli_query($conn,$qrynews);
$resultnotice = mysqli_query($conn,$qrynotice);
$rowcat = mysqli_fetch_assoc($resultcat);
$rownews = mysqli_fetch_assoc($resultnews);
$rownotice = mysqli_fetch_assoc($resultnotice);
include '../includes/closeconnection.php';
?>

<p class="text-right font-bold text-red-600"> 
    Hi, <?= $_SESSION['fullname'];?>
</p>
<h1 class="font-bold text-4xl">Dashboard</h1>
<hr class="h-1 bg-blue-600">
<div class="grid grid-cols-3 gap-5 mt-5">
    <div class="bg-blue-100 p-5 rounded-lg shadow">
        <h2 class="font-bold text-2xl">Categories</h2>
        <p class="mt-2 text-4xl font-bold"><?= $rowcat['total'] ?></p>
    </div>
    <div class="bg-red-100 p-5 rounded-lg shadow">
        <h2 class="font-bold text-2xl">News</h2>
        <p class="mt-2 text-4xl font-bold"><?= $rownews['total'] ?></p>
    </div>
    <div class="bg-green-100 p-5 rounded-lg shadow">
        <h2 class="font-bold text-2xl">Notices</h2>
        <p class="mt-2 text-4xl font-bold"><?= $rownotice['total'] ?></p>
    </div>
</div>
<?php include 'footer.php'; ?>