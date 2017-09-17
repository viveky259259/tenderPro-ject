<?php

$area = $_POST['area'];
$unit_project = $_POST['unit_project'];
$indenting_department = $_POST['indenting_department'];
$procuring_department = $_POST['procuring_department'];
$tender_ref_no = $_POST['tender_ref_no'];
$tender_type = $_POST['tender_type'];
$bid_validity_days = $_POST['bid_validity_days'];
$bidding_type = $_POST['bidding_type'];
$location = $_POST['location'];
$first_announcement_date = $_POST['first_announcement_date'];
$publication_date_on_portal = $_POST['publication_date_on_portal'];
$publication_date_at_portal = $_POST['publication_date_at_portal'];
$last_date_of_document_collection = $_POST['last_date_of_document_collection'];
$last_date_of_document_collection_upto = $_POST['last_date_of_document_collection_upto'];
$last_date_for_submission = $_POST['last_date_for_submission'];
$last_date_for_submission_upto = $_POST['last_date_for_submission_upto'];
$opening_date = $_POST['opening_date'];
$opening_date_upto = $_POST['opening_date_upto'];
$sale_open_date = $_POST['sale_open_date'];
$sale_close_date = $_POST['sale_close_date'];
$sale_close_date_at = $_POST['sale_close_date_at'];
$tender_title = $_POST['tender_title'];
$product_category = $_POST['product_category'];
$sub_category = $_POST['sub_category'];
$currency = $_POST['currency'];
$value = $_POST['value'];
$document_cost = $_POST['document_cost'];
$emd = $_POST['emd'];
$emd_exeption_allowed = $_POST['emd_exeption_allowed'];
$myPercent = $_POST['myPercent']/100;
$emd_payable_to = $_POST['emd_payable_to'];
$emd_payable_at = $_POST['emd_payable_at'];
$work_description = $_POST['work_description'];
$pre_qualification = $_POST['pre_qualification'];
$pre_bid_meet = $_POST['pre_bid_meet'];
$pre_bid_meet_addr = $_POST['pre_bid_meet_addr'];


$array_list = array('$area', 
	'$unit_project', 
	'$indenting_department', 
	'$procuring_department',
	'$tender_ref_no', 
	'$tender_type', 
	'$bid_validity_days',
	'$bidding_type',
	'$location', 
	'$first_announcement_date',
	'$publication_date_on_portal',
	'$publication_date_at_portal',
	'$last_date_of_document_collection',
	'$last_date_of_document_collection_upto',
	'$last_date_for_submission', 
	'$last_date_for_submission_upto', 
	'$opening_date', 
	'$opening_date_upto', 
	'$sale_open_date', 
	'$sale_close_date', 
	'$sale_close_date_at', 
	'$tender_title', 
	'$product_category',
	'$sub_category', 
	'$currency', 
	'$value', 
	'$document_cost', 
	'$emd', 
	'$emd_exeption_allowed', 
	'$myPercent', 
	'$emd_payable_to', 
	'$emd_payable_at',
	'$work_description', 
	'$pre_qualification', 
	'$pre_bid_meet',
	'$pre_bid_meet_addr'
);

function isset_funt(){
	global $array_list;
	$count = 1;
	foreach($array_list as $var){
		if(isset($var)&&!empty($var)){
			echo $count;
			echo "success <br>";
			$count++;
		}
	  }
	if($count==36){
		$count = 0;
		$sql = "INSERT INTO ('area','unit_project','indenting_department','procuring_department','tender_ref_no','')"
	}
	
}

isset_funt();
?>