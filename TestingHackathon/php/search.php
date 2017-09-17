<?php

include 'connect.inc.php';
include 'C:\wamp64\www\TestingHackathon\miss.php';
$search_by_id = $_POST['search_by_id'];
$search_by_name = $_POST['search_by_name'];
$search_by_category = $_POST['search_by_category'];
$search_by_value = $_POST['search_by_value'];
$search_by_location = $_POST['search_by_location'];
$search_by_start_date = $_POST['search_by_start_date'];
$search_by_end_date = $_POST['search_by_end_date'];

if(isset($search_by_id)&&!empty($search_by_id)){
	$sql = "SELECT * FROM tender WHERE tender_id='$search_by_id'";

if($result=mysqli_query($conn,$sql)){
?>
	<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
  <?php } ?>
        
		</table>

<?php


	}


}

else if(isset($search_by_name)&&!empty($search_by_name)){

$sql = "SELECT * FROM tender WHERE tender_name='$search_by_name'";
	
	
	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
  <?php } ?>
        
		</table>

<?php


	}

}

else if(isset($search_by_category)&&!empty($search_by_category)){
	$sql = "SELECT * FROM tender WHERE tender_category='$search_by_category'";

	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
  <?php } ?>
        
		</table>

<?php


	}

}

else if(isset($search_by_value)&&!empty($search_by_value)){
		$sql = "SELECT * FROM tender WHERE tender_value='$search_by_value'";
	
	
	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>

  <?php } ?> 

		</table>

<?php


	}


}

else if(isset($search_by_location)&&!empty($search_by_location)){
		$sql = "SELECT * FROM tender WHERE tender_location='$search_by_location'";
	
	
	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
   <?php } ?>
        
		</table>

<?php


	}


}

else if(isset($search_by_start_date)&&!empty($search_by_start_date)){
		$sql = "SELECT * FROM tender WHERE tender_start_date='$search_by_start_date'";
	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
 <?php } ?>
        
		</table>

<?php


	}


}

else if(isset($search_by_end_date)&&!empty($search_by_end_date)){
		$sql = "SELECT * FROM tender WHERE tender_end_date='$search_by_end_date'";
	if($result=mysqli_query($conn,$sql)){
?>
		<table border="1">
		<thead>
		 <th>Tender Id:</th>
		 <th>Tender Name:</th>
		 <th>Tender Category:</th>
		 <th>Tender Value:</th>
		 <th>Tender Location:</th>
		 <th>Tender Start Date:</th>
		 <th>Tender End Date:</th>
        </thead>
<?php  
   while($rows = mysqli_fetch_assoc($result)){
   	?>
   	<tr>
   	 <td><?php echo $rows['tender_id'];?></td>
   	 <td><?php echo $rows['tender_name'];?></td>
   	 <td><?php echo $rows['tender_category'];?></td>
   	 <td><?php echo $rows['tender_value'];?></td>
   	 <td><?php echo $rows['tender_location'];?></td>
   	 <td><?php echo $rows['tender_start_date'];?></td>
   	 <td><?php echo $rows['tender_end_date'];?></td>
   	</tr>
   <?php } ?>
        
		</table>

<?php


	}

}else{
	echo "Field Empty";
}

?>