<?php
include('config.php');
?>
<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

  
<html>
    <head>
        <title>User Details</title>
        <style>
        body
        {
            background-image : url("https://cdn.pixabay.com/photo/2017/04/05/04/44/background-2203989_960_720.jpg");
            text-align : center;
        }
        </style>
    </head>
<body>
<h1>USERS RECORD</h1>
<table border="1px" cellpadding="5" align="center">
		<thead>
			<tr>
                <th>Id</th>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
				<td><a href="edit.php?id=<?php echo $row['id']?>">
				<input type="button" name="edit" value="Edit"></a></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">
				<input type="button" onclick="return del()" name="Delete" value="Delete"></a></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }

    // else
    // {
    //     echo "no result";
    // }
?>
<script type="text/javascript">	
function del()
{
  if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS RECORD ??... "))
  {
       return true ;
  }
  else
  {
    return false;
  }
}
</script>
</body>
</html>