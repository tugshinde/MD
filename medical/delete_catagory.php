<?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
      

      echo $id=$_GET['id'];
      if(mysqli_query($con,"DELETE FROM catagory_name WHERE ID='".$id."'"))
	{
		echo "
		<script>
		alert('Catagory Deleted');
		window.location.href='view_catagory.php';
		</script>
		";
		}
	else
	{
		echo "
		<script>
		alert('Try Again');
		window.location.href='view_catagory.php';
		</script>
		";
	}
	 ?>
	