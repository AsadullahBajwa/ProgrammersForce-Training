<?php

//step 1: database connection
$db_con=mysqli_connect("localhost","root","","test");

if(!$db_con){
    echo "Database connection error in update file";
}
else if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
    $user_id=$_GET["id"];
//step 2: query to database

    $qry="Delete from users where id=$user_id";
    $res=mysqli_query($db_con,$qry);

    if(!$res){
        echo "User Not Found";
    }
    echo '<script>alert("User Deleted successfully1")</script>';
    header("Location:readUser.php");
    mysqli_close($db_con);
}


?>