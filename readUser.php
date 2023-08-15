<?php

$db_con=mysqli_connect("localhost","root","","test");

if(!$db_con){
    echo"error in connection";
}
else{
    $qry="Select * from users";

    $res=mysqli_query($db_con,$qry);
    if(!$res){
        echo"Error in query reading";
    }
}

?>

<h2>Displaying Users</h2><br>

<ul>
    <?php
    while($record=mysqli_fetch_assoc($res)):?>
        <li><?php echo $record['name']." - ".$record['email']." - ".$record['age']." - ".$record['country'];?> <a href="editUser.php?id=<?php echo $record['id'];?>">Edit</a> | <a href="deleteUser.php?id=<?php echo $record['id']; ?>">Delete</a></li>
    <?php endwhile; ?>
</ul>