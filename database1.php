<?php
include_once('config.php');
?>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $branch = $_POST['branch'];
    $Year = $_POST['Year'];

    //INSERT INTO `user` (`id`, `username`, `email`, `gender`, `city`) VALUES (NULL, 'shubh', 'subh@gmail.com', 'male', 'dehradun');

    $sql1 = "INSERT INTO `user` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    $sql2 = "INSERT INTO `student_details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$Year')";
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);

}
else{
    echo "Please click submit button to submit the data..";
}
?>

<table border="1" cellpadding = "10" align="bottom">
	<tr>
		<td>UserName</td>
		<td>Email</td>
		<td>Gender</td>
		<td>City</td>
		<td>Branch</td>
		<td>Year</td>
	</tr>
	<tr>
		<td><?php echo $username ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $gender ?></td>
		<td><?php echo $city ?></td>
		<td><?php echo $branch ?></td>
		<td><?php echo $Year ?></td>
	</tr>
</table>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="database1.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    Gender <input type="radio" name="gender" value="Male" required>Male <input type="radio" name="gender" value="Female" required>Female <br>
    Select City <select name="city" required>
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Haridwar">Haridwar</option>
        <option value="Kolkatta">Kolkatta</option>
        <option value="Bhopal">Bhopal</option>
        <option value="Varnasi">Varnasi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Indore">Indore</option>
        <option value="Agra">Agra</option>
        <option value="Nanital">Nanital</option>
    </select><br>
    Branch <input type="text" name ="branch" placeholder="enter your branch" required><br>
    Year <input type="number" name ="Year" placeholder="2***" required><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>