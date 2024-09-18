
<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    echo $priority, $name;
}

?>