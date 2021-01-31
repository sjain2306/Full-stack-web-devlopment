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
    <th><input type="contact" name="Contact" minlength="10" maxlength="10" placeholder="phone number"required></th>
    <th>
    <select name = "City" placeholder="city name" required>
			<option>Select City</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Haridwar">Haridwar</option>
      <option value="Nanital">Nanital</option>
      <option value="Chamoli">Chamoli</option>
			<option value="Uttarkashi">Uttarkashi</option>
		</select>
    </th>
    
    <th>CSE-CORE<input type="checkbox" name="Course" value="CSE-core" require><br> CSE-DS<input type="checkbox" name="Course" value="CSE-DS" require><br> CSE-CC<input type="checkbox" name="Course" value="CSE-CC" require><br></th>
    <th> Games<input type="checkbox" name="Init[]" value="Games" ><br>
        movies<input type="checkbox" name="Init[]" value="movies" ><br>
        programming<input type="checkbox" name="Init[]" value="prograaming"> <br>
        riding <input type="checkbox" name="Init[]" value="riding" ></th>
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
    

    
		
    echo " Username = $name <br>";
    echo  "Email =$Email <br>";
    if(!(is_numeric($Contact)))
    {
      echo "<script>alert('contact number should have 10 digit phoone nos')</script>";
    }
    else
    {
      echo  "contact no. = $Contact <br>";
    }
   
    echo  "city = $City <br>";
    echo  "Course = $Course <br>";

    if (isset($_POST['Init']))
    {
      $Init = $_POST['Init'];
      $Init = implode(" , ", $Init); 
      if (substr_count($Init,",")<2)
      {
       echo "<script>alert('select atleast three intrests')</script>" ;
      }
     else
     {
       echo  "interest = $Init <br>";
     }
    }  
 }
 else{
     echo "no input";
 }
 ?>