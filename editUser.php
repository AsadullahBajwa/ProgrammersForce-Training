<!-- <?php

$user_id=$_GET["id"];

//step 1: connecting to database

$db_con=mysqli_connect("localhost","root","","test");

if(!$db_con){
    echo "Error in connecting to database update file";
}
if($_SERVER["REQUEST_METHOD"]==="GET" && isset($_GET["id"])){
    

    //step 2: query to database

    $qry="SELECT * from users where id=$user_id";

    $res1=mysqli_query($db_con,$qry);
    $res=mysqli_fetch_assoc($res1);
    if(!$res1){
        echo "ERROR while querring in edit file";
    }


}
if($_SERVER["REQUEST_METHOD"]==="POST"){
    // $user_id=$_POST["id"];
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

<form method='POST' action="editUser.php">
    <h1>User Information</h1><br>
    <label for="country">Name</label>
    <input type="text" name="name" value="<?php echo $res['name'];?>"><br>
    <label for="country">Email</label>
    <input type="email" name="email" value="<?php echo $res['email']; ?>"><br>
    <label for="country">Age</label>
    <input type="number" name="age" value="<?php echo $res['age']; ?>"><br>
    <label for="country">Country</label>
<select id="country" name="country">
  <option value="australia" <?php if ($res['country'] === 'australia') echo 'selected'; ?>>Australia</option>
  <option value="canada" <?php if ($res['country'] === 'canada') echo 'selected'; ?>>Canada</option>
  <option value="usa" <?php if ($res['country'] === 'usa') echo 'selected'; ?>>USA</option>
</select><br>
    <button type="submit">Update User</button>
</form> -->

<?php
$user_id = $_GET["id"];

// Step 1: Connecting to the database
$db_con = mysqli_connect("localhost", "root", "", "test");

if (!$db_con) {
    echo "Error in connecting to the database update file";
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {

    // Step 2: Query the database
    $qry = "SELECT * FROM users WHERE id=$user_id";

    $res1 = mysqli_query($db_con, $qry);
    $res = mysqli_fetch_assoc($res1);
    if (!$res1) {
        echo "ERROR while querying in edit file";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $country = $_POST['country'];

    // Step 2: Query the database
    $qry = "UPDATE users SET name='$name', email='$email', age='$age', country='$country' WHERE id='$user_id'";

    $res = mysqli_query($db_con, $qry);

    if (!$res) {
        echo "ERROR while querying in update function";
    } else {
        header("Location: readUser.php");
        exit;
    }
}
?>

<form method='POST' action="editUser.php?id=<?php echo $user_id; ?>">
    <h1>User Information</h1><br>
    <label for="country">Name</label>
    <input type="text" name="name" value="<?php echo $res['name']; ?>"><br>
    <label for="country">Email</label>
    <input type="email" name="email" value="<?php echo $res['email']; ?>"><br>
    <label for="country">Age</label>
    <input type="number" name="age" value="<?php echo $res['age']; ?>"><br>
    <label for="country">Country</label>
    <select id="country" name="country">
        <option value="australia" <?php if ($res['country'] === 'australia') echo 'selected'; ?>>Australia</option>
        <option value="canada" <?php if ($res['country'] === 'canada') echo 'selected'; ?>>Canada</option>
        <option value="usa" <?php if ($res['country'] === 'usa') echo 'selected'; ?>>USA</option>
    </select><br>
    <button type="submit">Update User</button>
</form>
