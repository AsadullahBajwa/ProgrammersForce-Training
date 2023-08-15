<?php

//step 1: connecting to database

$db_con=mysqli_connect("localhost","root","","test");

if(!$db_con){
    echo "Error in connecting to database update file";
}
elseif($_SERVER["REQUEST_METHOD"]=="POST"){
    $user_id=$_POST["id"];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $country=$_POST['country'];

    //step 2: query to database

    $qry="UPDATE users SET name='$name',email='$email', age='$age', country='$country' WHERE id='$user_id'";

    $res=mysqli_query($db_con,$qry);

    if(!$res){
        echo "ERROR while querring in update function";
    }
    
    header("Location:readUser.php");

}


?>