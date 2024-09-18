

<?php include 'header.php'; ?>

<h1 class="font-bold text-4xl">Create Category</h1>
<hr class="h-1 bg-blue-600">

<form action="actioncategory.php" method="POST" class="mt-5">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="Priority" name="priority">
    <input type="text" class="w-full border p-3 my-2 rounded-lg" placeholder="Category Name" name="name">
    <div class="flex justify-center mt-2">
        <button class="bg-blue-600 text-white px-4 py-3 rounded-lg" name="store">Create Category</button>
        <a href="category.php" class="bg-red-600 text-white px-4 py-3 rounded-lg ml-3">Cancel</a>
    </div>
</form>
<?php include 'footer.php'; ?>