<?php include 'header.php'; ?>
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
    <tr class="text-center">
        <td class="border p-2">2021-12-12</td>
        <td class="border p-2">Image</td>
        <td class="border p-2">News Title</td>
        <td class="border p-2">News Description</td>
        <td class="border p-2">Category</td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg">Edit</a>
            <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg" onclick="return confirm('Are you sure to Delete?');">Delete</a>
        </td>
    </tr>
</table>
<?php include 'footer.php'; ?>