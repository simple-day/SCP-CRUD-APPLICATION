<!--validation-->
<?php

    if(isset($_POST['submit'])){
        
        $item = $_POST['item'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $class = $_POST['class'];
        $special = $_POST['special'];
        $description = $_POST['description'];

    }

    $query = "insert into `scp database (`item`, `name`, `image`, `class`, `special`, `description`) values ('$item', '$name','$image','$class','$special','$description',)";

    $result = mysqli_query($conn, $query);

    
    if($result->connect_error)
    {
        die("Connection failed!" . $result->connect_error);
    }
    else
    {
        echo "You have successfully entered the data";
    }

?>