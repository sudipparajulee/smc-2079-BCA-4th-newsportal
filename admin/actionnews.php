<?php
if(isset($_POST['store']))
{
    $category_id = $_POST['category_id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_FILES['photopath']['name'];
    $tmp_name = $_FILES['photopath']['tmp_name'];
    $path = "../uploads/".$photopath;
    move_uploaded_file($tmp_name, $path);


}