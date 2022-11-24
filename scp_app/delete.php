<?php include('scp_app/connection.php'); ?>

<?php

    if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "delete from `scp database` where `id` = $id";

    $result = mysqli_query($conn, $query);

    if($result->connect_error){
        die("query Failed".$result->connect_error);
    }
    else
    {
        echo "Successfully deleted.";
    }
}

?>