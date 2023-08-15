<?php
// $server="localhost";
// $user="root";
// $password="";
// $db_name="test";

$db_con=mysqli_connect("localhost","root","","test");

if(!$db_con){
    echo "Not connected";
}
elseif($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $country=$_POST['country'];

    $qry="insert into users (name,email,age,country) values ('$name','$email','$age','$country')";

    $res=mysqli_query($db_con,$qry);

    if(!$res){
        echo "Error in insertion";
    }
    // echo "<script>alert('User Created')</script>";
    header("Location:index.php");
}

?>

<form method='POST' action="createUser.php">
    <h1>User Information</h1><br>
    <label for="country">Name</label>
    <input type="text" name="name" placeholder="Name"><br>
    <label for="country">Email</label>
    <input type="email" name="email" placeholder="Email"><br>
    <label for="country">Age</label>
    <input type="number" name="age" placeholder="Age"><br>
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select><br>
    <button type="submit">Create User</button>
</form>