<html>
<head>
<title>deadline25jan</title>
</head>
<body>
  <div class="" align="center">
    <form action="first.php" method="POST">
    <table>
    <thead>
    <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>CONTACT</th>
    <th>CITY</th>
    <th>Course</th>
    <th>INTEREST</th>
    </tr>
    <tr>
    <th><input type="text" name="name"  placeholder="username" required></th>
    <th><input type="email" name="Email" required placeholder="@gmail.com"></th>
    <th><input type="number" name="Contact" pattern="[7-9]{1}[0-9]{9}" placeholder="phone number"required></th>
    <th><input type="text" name="City" placeholder="city name" require></th>
    <th>CSE-CORE<input type="checkbox" name="Course" value="CSE-core" require><br> CSE-DS<input type="checkbox" name="Course" value="CSE-DS" require><br> CSE-CC<input type="checkbox" name="Course" value="CSE-CC" require><br></th>
    <th> Games<input type="checkbox" name="Init" value="Games" ><br>
        movies<input type="checkbox" name="Init" value="movies" ><br>
        programming<input type="checkbox" name="Init" value="prograaming"> <br>
        riding <input type="checkbox" name="Init" value="riding" ></th>
    </tr>
    </thead>
    </table>
    <input type="submit" name="submit">
    </form>
  </div>

</body>
</html>

 <?php
 //$var1 = 10;
 //$var2 = 20;
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $Contact = $_POST['Contact'];
    $City = $_POST['City'];
    $Course = $_POST['Course'];
    $Init = $_POST['Init'];
    
    echo " Username = $name ";
    echo  "Email =$Email";
    echo  "contact no. = $Contact";
    echo  "city = $City";
    echo  "Course = $Course";
    echo  "interest = $Init";
 }
 else{
     echo "no input";
 }
 ?>