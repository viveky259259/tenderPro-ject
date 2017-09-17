<?php
require 'C:\wamp64\www\TestingHackathon\connect.php';
require 'C:\wamp64\www\TestingHackathon\fpdf181\fpdf.php';

//remove this part while adding db
$dept_name= "NAME OF THE NOTICE OWNER (abbreviation if possible and standard)";
$address="Complete address of the owner";
$Name_of_Notice="E-TENDER/TENDER AIM";
$Nit="ThisIsANoticeNumber";
$Corrigendum_date="21/01/1996";
$Owner="1.Owner";
$type_of_Bidder="open";
$category="Category";
$purpose="name the purpose";
$website="www.website.com";
$OwnerWebsite="www.ownerwebsite.com";
$Nth=1261616;
$NameOfTheWork="aim of the tender about which corrigendum is published.";

$pdf=new FPDF("P","mm","A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetDisplayMode('real','two');
	$pdf->SetMargins(10, 1 ,10);
	$pdf->SetFont('Times',"B",15);
	$pdf->ln(10);
	
	$pdf->MultiCell(0,7,$Owner,1,'C');
	$pdf->Ln(5);
	
	$pdf->SetFont('Times',"U",15);
	
	$pdf->MultiCell(0,10,"Corrigendum",0,'C');
	$pdf->Ln(5);
	$pdf->SetFont('Times',"B",12);
	$pdf->MultiCell(0,10,$Nth ."th corrigendum for NIT NO: ".$Nit."                  Date:".$Corrigendum_date,0);
	$pdf->MultiCell(0,10,"A minor change in special terms and condition clause number 16(a) has been done in the tender document of the above work.the same is made available in the Tender notice nember uploaded on website ".
		$OwnerWebsite." Rest no change has been made.",0);
	$pdf->MultiCell(0,10,"    \n\n"."                                                        ".$Owner." Designation",0,'C');
















//	$pdf->Write(30,"Click here to open tender notice in website","");
 
	$pdf->Output('');

?>
