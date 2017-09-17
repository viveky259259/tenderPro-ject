<?php

include 'connect.inc.php';
$tender_id = $_POST['tender_id'];
$tender_name = $_POST['tender_name'];
$tender_category = $_POST['tender_category'];
$tender_location = $_POST['tender_location'];
$tender_value = $_POST['tender_value'];
$tender_start_date = $_POST['tender_start_date'];
$tender_end_date = $_POST['tender_end_date'];

if(isset($tender_id)&&!empty($tender_id)){
	if(isset($tender_name)&&!empty($tender_name)){
		if(isset($tender_category)&&!empty($tender_category)){
			if(isset($tender_location)&&!empty($tender_location)){
				if(isset($tender_value)&&!empty($tender_value)){
					if(isset($tender_start_date)&&!empty($tender_start_date)){
						if(isset($tender_end_date)&&!empty($tender_end_date)){
							$sql = "INSERT INTO `tender` (tender_id, tender_name, tender_category, tender_location, tender_value, tender_start_date, tender_end_date) VALUES ('$tender_id', '$tender_name', '$tender_category', '$tender_location', '$tender_value' ,'$tender_start_date', '$tender_end_date')";
							if(mysqli_query($conn,$sql)){
								echo "Data Appended Successfully";
							}else{
								echo "Error while appending data";
							}

	
}
	
}
	
}
	
}
}
	
}
	
}


?>
