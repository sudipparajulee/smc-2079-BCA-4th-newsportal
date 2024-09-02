<?php include 'header.php'; ?>
    <div class="flex justify-center mt-10">
        <form action="login.php" method="post" class="bg-gray-100 p-10 rounded-lg shadow">
            <h1 class="text-center text-2xl font-bold">Login</h1>
            <div class="mb-4">
                <input type="text" name="username" class="mt-1 p-2 rounded-lg w-full" placeholder="Username" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" class="mt-1 p-2 rounded-lg w-full" placeholder="Password" required>
            </div>
            <!-- <button type="submit" class="bg-red-500 text-white p-2 rounded-lg w-full">Login</button> -->
             <a href="index.php" class="bg-red-500 text-white p-2 rounded-lg w-full block text-center">Login</a>
        </form>
    </div>
<?php include 'footer.php'; ?>