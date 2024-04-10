<?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
      

      echo $id=$_GET['id'];
      if(mysqli_query($con,"DELETE FROM drawer WHERE ID='".$id."'"))
	{
		echo "
		<script>
		alert('Drawer Deleted');
		window.location.href='view_drawer2.php';
		</script>
		";
		}
	else
	{
		echo "
		<script>
		alert('Try Again');
		window.location.href='view_drawer2.php';
		</script>
		";
	}
	 ?>