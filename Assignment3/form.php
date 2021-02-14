<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
    <style>
    body
    {
        background-image : url("https://cdn.pixabay.com/photo/2017/04/05/04/44/background-2203989_960_720.jpg");
        text-align : center;
        font-size : 1.5rem;
        margin-top : 20%;
    }
    </style>
<body>
<form method="POST" action="form.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    GENDER - 
            Male <input type="radio" name="gender" value="Male" required>
            Female <input type="radio" name="gender" value="Female" required><br>

    Select City <select name="city" required>
        <option value="Dehradun">Dehradun</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Delhi">Delhi</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Patna">Patna</option>
    </select><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>