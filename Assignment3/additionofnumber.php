  <html>
    <head>
        <title>Sum of Two Numbers</title>
    </head>
    <body>
        <form method="POST" action="additionofnumber.php">
            Variable 1 <input type="number" name="variable1">
            Variable 2 <input type="number" name="variable2">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    $var1 = $_POST['variable1'];
    $var2 = $_POST['variable2'];
    if (empty($var1))
      {
        $var1=0;
      }
    if (empty($var2)) 
      {
        $var2=0;
      }
    $sum = $var1 + $var2;
    echo "Sum of two numbers is ".$sum;
}
else{
    echo "No data submitted yet. Click submit to submit the form.";
}
?>
