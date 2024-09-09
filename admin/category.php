<?php include 'header.php'; ?>

<h1 class="font-bold text-4xl">Categories</h1>
<hr class="h-1 bg-blue-600">

<div class="text-right my-5">
    <a href="" class="bg-blue-600 text-white px-4 py-3 rounded-lg">Add Category</a>
</div>

<table class="w-full">
    <tr>
        <th class="border p-2 bg-gray-100">Order</th>
        <th class="border p-2 bg-gray-100">Category Name</th>
        <th class="border p-2 bg-gray-100">Action</th>
    </tr>
    <tr class="text-center">
        <td class="border p-2">1</td>
        <td class="border p-2">News</td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg">Edit</a>
            <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg">Delete</a>
        </td>
    </tr>
</table>
<?php include 'footer.php'; ?>