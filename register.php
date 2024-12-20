<?php include 'header.php'; ?>
    <div class="flex justify-center mt-10">
        <form action="register.php" method="post" class="bg-gray-100 p-10 rounded-lg shadow w-5/12">
            <h1 class="text-center text-2xl font-bold">Register</h1>
            <div class="mb-4">
                <input type="text" name="name" class="mt-1 p-2 rounded-lg w-full" placeholder="Full Name" required>
            </div>
            <div class="mb-4">
                <input type="text" name="username" class="mt-1 p-2 rounded-lg w-full" placeholder="Username" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" class="mt-1 p-2 rounded-lg w-full" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <input type="password" name="cpassword" class="mt-1 p-2 rounded-lg w-full" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="bg-red-500 text-white p-2 rounded-lg w-full" name="register">Register</button>
             <p class="text-center text-sm mt-4">Already have an account? <a href="login.php" class="text-blue-500">Login Now</a></p>
        </form>
    </div>
<?php include 'footer.php'; ?>

<?php
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password != $cpassword)
    {
        echo '<script>alert("Password does not match")</script>';
        die();
    }
    if($name == '' || $username == '' || $password == '' || $cpassword == '')
    {
        echo '<script>alert("All fields are required")</script>';
        die();
    }

    //check if name is string with space
    $exp = "/^[a-zA-Z ]+$/";
    if(!preg_match($exp, $name)){
        echo '<script>alert("Enter a Valid Name")</script>';
        die();
    }

    //for valid email address
    // $emailexp = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    // if(!preg_match($emailexp, $email)){
    //     echo '<script>alert("Enter a Valid Email Address")</script>';
    //     die();
    // }

    //phone exact 10 digits start with 98 or 97
    // $phoneexp = "/^(98|97)[0-9]{8}$/";
    // if(!preg_match($phoneexp, $phone)){
    //     echo '<script>alert("Enter a Valid Phone Number")</script>';
    //     //back
    //     echo '<script>window.history.back();</script>';
    // }

    $password = md5($password);
    $qry = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
    include 'includes/dbconnection.php';
    if(mysqli_query($conn, $qry))
    {
        echo '<script>alert("User Registered Successfully")</script>
        <script>window.location.href = "login.php";</script>';
    }
    else
    {
        echo "Error: " . $qry . "<br>" . mysqli_error($conn);
    }
    include 'includes/closeconnection.php';
}
?>