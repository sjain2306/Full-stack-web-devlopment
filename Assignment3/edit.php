<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="GET" action="edit.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Type Your E-mail" required><br>
    CONTACT <input type="text" name="contact" value=<?php echo "$contact" ?> placeholder="Type Your Contact Number" required><br>
    Select City <select name="city">
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Mumbai" <?php if($city=="Mumbai"){echo "selected";}?>>Mumbai</option>
        <option value="Kolkata" <?php if($city=="Kolkata"){echo "selected";}?>>Kolkata</option>
        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
        <option value="Patna" <?php if($city=="Patna"){echo "selected";}?>>Patna</option>
    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>