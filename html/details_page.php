<h3 class="text-info">Please enter your details:</h3>
<form method="post" action="loc.php">
<br><br>
<div class="dropdown">
  <select name="name">
  <?php
	$result = query("Select * from locations");
	
	//print_r($result);
	foreach ($result as $values) {
    // $arr[3] will be updated with each value from $arr...
  echo "<option value=".$values["Location_id"].">".$values["Place"]."</option>";
    
}
  ?>
    
    
  </select>
  <br><br>
  <br><br>
 <input type="Submit" value="Submit" class="btn btn-primary"  > 
 <a href="home.php" class="btn btn-primary">Home</a> 
  <br><br>
  
  
</div>

</form>