 <?php
   include 'server.php';
   $id=$_GET['idn'];
   
   $query="Delete from subscriber where id = '$id'";
   $data=mysqli_query($con,$query);
   
   if($data){
        echo "<script type = 'text/javascript'> alert('Record deleted successfully') </script>" ; 
	?>
		<meta http-equiv="refresh" content="0; url=http://localhost/web/admin/subscriberlist.php">
		<?php
   }
   else{
        echo "<script type = 'text/javascript'> alert('Nothing deleted....') </script>" ; 
   }

  ?>