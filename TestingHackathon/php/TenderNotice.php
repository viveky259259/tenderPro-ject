<?php
require 'C:\wamp64\www\TestingHackathon\connect.php';
require 'C:\wamp64\www\TestingHackathon\fpdf181\fpdf.php';



$server_name="localhost";
$server_username="root";
$server_password="";
$server_dbname="admin"; 

$conn=mysqli_connect($server_name,$server_username,$server_password, $server_dbname);
	
$sql=" SELECT * from tendernoticeinfo";
$result2=mysqli_query($conn,$sql);
$rows2=mysqli_fetch_assoc($result2);
$title=$rows2['title'];
$titleinfo=$rows2['titleInfo'];

$sql1 = "SELECT * from govt_info";
$result1 = mysqli_query($conn,$sql1);
$rows = mysqli_fetch_assoc($result1);

$sql1=" SELECT * from merchantinfo where id=10421";
$result3=mysqli_query($conn,$sql1);
$rows3=mysqli_fetch_assoc($result3);
$id=$rows3['id'];
$email=$rows3['email'];
$phoneNum=$rows3['phoneNum'];
$pan=$rows3['pan'];
$service=$rows3['service'];
$que=$rows3['que'];
$firstname=$rows3['firstname'];
$lastname=$rows3['lastname'];
$role=$rows3['role'];
$add=$rows3['address'];
$companyname=$rows3['companyname'];


//remove this part while adding db
$dept_name= $rows['dept_name'];
$address=$rows['address'];
$name_of_notice=$rows['name_of_notice'];
$nit=$rows['nit'];
$notice_date=$rows['notice_date'];
$owner=$rows['admin'];
$type_of_bidder=$rows['type_of_bidder'];
$website=$rows['website'];
$ddesignation=$rows['designation'];
$last_date=$rows['last_date'];
#$Introduction_Of_Company=$rows['introduction_of_company'];
$ram=$rows['ram'];
$graphics=$rows['graphics'];;
$processor=$rows['processor'];
$company=$rows['company'];
$harddisk=$rows['harddisk'];

class Pdf extends FPDF{


function Header(){
	$this->SetFont('Times',"B",15);
	$this->Ln(5);
	$this->MultiCell(0,10,"*****Tender Notice*****",0,'C');
	$this->Ln(5);
}
function Footer(){

		$this->SetFont("Times");
		$this->SetFontSize(12);
		$this->Cell(10,20,"Page " .$this->PageNo().'/{nb}');
	}

	
}



$pdf=new Pdf("P","mm","A4");
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetDisplayMode('real','two');
	$pdf->SetMargins(10, 1 ,10);
	$pdf->SetFont('Times',"B",15);
	$pdf->ln(10);
	//pdf->MultiCell(,7,'ADDRESS: '.$Ministry." ".$Department." ".$Statdept.$Addept_name,0,'C'C;
	//$pdf->Cell(5,8,'dept '.$dept_name,0,0,'C');
	$pdf->MultiCell(0,7,$dept_name."\n Address: ".$address."\n  ",1,'C');
	$pdf->SetFont('Times',"UB",17);
	$pdf->Ln(5);
	$pdf->MultiCell(0,10,$name_of_notice,0,'C');
	$pdf->Ln(5);
	$pdf->SetFont('Times',"B",15);
	$pdf->MultiCell(0,10,'NIT (Notice Inviting e-Tender) NO:'.$nit."              Date:".$notice_date,0);
	$pdf->SetFont('Times',"",14);
	$pdf->MultiCell(0,10,$owner." invites ".$type_of_bidder." bidders. Interested and eligible bidders are requested to apply through e-tender website -".$website.".",0,'L');
	$pdf->MultiCell(0,10,"Last date for the submission of the bid is time on.".$last_date,0,'');


/*
foreach($result2 as $row3) {
	$pdf->SetFont('Arial','',10);	
	$pdf->Ln();
	foreach($row3 as $column){
		$pdf->Cell(95,10,$column,1);
	}
}
*/	
	$pdf->Ln(10);

	#$pdf->SetFont("","B",17);
	#$pdf->MultiCell(0,10,"Introduction:",0,'L');
	$pdf->SetFont("","",15);
	$pdf->Ln(1);
	#$pdf->MultiCell(0,10,"Introduction of the Company",0,'L');
	#$pdf->MultiCell(0,10,$introduction_of_company,0,'L');
	$pdf->SetFont("","UB",15);
	$pdf->MultiCell(0,10,"Terms and Conditions:",0,'L');
	$pdf->SetFont("","",15);
	$pdf->MultiCell(0,10,"1.   The bidders will have to quote for all 13 items individually mentioned in schedule & quantities.
2.	Bidder who quote for individual items will be rejected. Bidder will have to quote all the Items.
3.	For any query regarding bid please contact Institute of Seismological Research
4.	Tender document should be downloaded from website: isr.gujarat.gov.in.
5.	Incomplete or conditional bids will be summarily rejected.
6.	If any vendor does not qualify in technical evaluation, the commercial proposal of the vendor shall not be opened.
7.	The technical bid and financial bid will be opened on two different stages.
8.	ISR reserves the right to reject all or any tender without assigning any reason.
9.	The rates must be quoted inclusive of all taxes, duties, frights, transportation and installation charge.
10.	The Bidder should deliver the goods/services within stipulated time as mentioned in Special terms and conditions in the Purchase Order.
11.	Offer by Fax, e-mail or received in open condition will not be entertained.
12.	The bid shall be signed by the vendor with seal on each page of the tender.
13.	The quantity/requirement is only indicative and may change as per actual requirement.
14.	Concern committee will evaluate the technical and price bid.
15.	EMD of unsuccessful tenderers will be returned without any interest.
16.	The payment will be released within 30 days of installation of complete supply of material based on duly certified installation reports after installations are done.
17.	In case of any dispute courts in Gandhinagar will have jurisdiction.
18.	Tender fee, EMD must be in the from of Demand Drafts drawn in the name of Director General, Institute of Seismological Research, Payable at Gandhinagar. Performance BG may be in the formal DD/BG from any nationalized bank or co-operative banks recognized by Govt. of Gujarat along with covering letter.
19.	Self attested copies of Registration no.and PAN no.(copy) must be attached with technical bid.",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"Requirements are as follows:",0,'L');
$pdf->SetFont('Times',"",15);
$pdf->MultiCell(0,10,"Ram: ".$ram,0,'L');
$pdf->MultiCell(0,10,"Hard Disk: ".$harddisk,0,'L');
$pdf->MultiCell(0,10,"Processor: ".$processor,0,'L');
$pdf->MultiCell(0,10,"Company : ".$company,0,'L');
$pdf->MultiCell(0,10,"Graphics: ".$graphics,0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->Ln(30);
$pdf->MultiCell(0,10,"(A)	ELIGIBILITY CRITERIA",0,'C');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"The pre-qualifications of the bidders are as under:

(i)	The bidder/OEM should have a Service Centre in NCR preferably in Noida / Delhi from where after-sales support is to be provided.
(ii)	If the bidder is a distributor / dealer, they should submit an Authorization Letter from OEM (in original) stating that the bidder is the authorized distributor / dealer for this item.
(iii)	The bidder should attach:
	1.Warranty Certificate for onsite support for Minimum One year from OEM.
	2.All  certificates  and  documentary	proof  for	the  technical  specifications
	given  in Annexure I.			
(iv)	The  bidders  should  enclose  copies  of  all	necessary	a p p l i c a b l e	registrations  like
	VAT/  CST,  Service  Tax  etc.  as  supporting  documents.  In  the	absence  of  these
	documents, the bid will be rejected.			
(v)	Prequalification Criteria as per enclosed format in Annexure B.
Before submission of the bid, the bidders may please verify the eligibility criteria and ensure fulfillment of all the terms and conditions. In the absence of documents / certificates under eligibility criteria above, the bid is liable to be rejected.
",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
(B)	BID SUBMISSION
",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"The bid must be submitted in two parts; Part-I (Technical Bid): Supply of Laptops and
Part-II (Price Bid): Supply of Laptops in separate sealed envelopes. Both the bids shall be enclosed in another sealed envelope super scribing:
Tender Name	:	SUPPLY OF LAPTOPS AT Government
Tender No.	:	GovernmentN/PUR/QUO/14-15/07 Dated 18.07.2014)
Last Date & Time	: 01/08/2014; 15:00 HRS
(a)	Part –  I (Technical Bid) shall contain:
(i)	Technical bid with full details including description of make & model of items for technical assessment of the proposal. The bidder must quote only for branded parts.
(ii)	An undertaking as mentioned under Eligibility Criteria.
(iii)	The onsite warranty services must be provided at ST PI , NOIDA. The bidder must provide the plan / arrangement in escalation matrix, for warranty services to be provided at S T P I , NOIDA.
(iv)	The  Compliance  Statement  by  the  bidder  to  the  technical  specifications  (as  per
Annexure  A) along	with	relevant	product	brochure,	technical	documents	etc.
Bids	without	proper Compliance Statement will be rejected.
(v)	Acceptance to the terms and conditions laid down in the tender document. A copy of
the bid document duly signed by the bidder’s authorized representative is to be attached in token of acceptance of the same. Any deviation in the general terms and condition may lead to the rejection of the bid.
",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
Important Note:
",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"
1.	Part –II (Price Bid) should contains Only Price Details in the prescribed format as per Annexure-C with proper seal and signature of authorized person. Prices should be given in both figures and words.
2.	Opening of Technical & Price Bid:
Only the technical bids will be opened on 01/08/2014; 15:30 HR. The bidder’s authorized representative may attend the technical bid opening. Price bids of short-listed / technically qualified bids would be opened on a later date & time under intimation to all successful bidders.
4. Bid Validity: Bid should be valid for 9 0 Days from the date of c l o s i n g . A bid, valid for a shorter period, is liable to be rejected. Tenderer may ask the bidders to extend the period of validity, if required.
5.	Termination By default:
",0,'L');
$pdf->MultiCell(0,10,"
The Government may, without prejudice to any other remedy for breach of contract, by written notice of default sent to supplier, terminate the Contract in whole or part:
·	If the Supplier fails to provide services /rectify the fault within the time period specified in the contract or any extension thereof granted by the Government.
·	If the Supplier fails to perform any other obligations under the Contract.
",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
6.	Rejection of the bid
",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"
a.	The bidder is expected to examine all instructions, formats, terms & conditions, & scope of work in the bid document. Failure to furnish all information required as per bid document or submission of bid which is not substantially responsive to the bid document in every respect may result in rejection of bid. In respect of interpretation/clarification of this bid document and in respect of any matter relating to this bid document, the decision of Government will be final.
b.	No prices are to be indicated in the Technical bid and if price is mentioned in the “Technical Bid” it may lead to rejection of the bid.
c.	Bids not submitted as per two bid system will be summarily rejected.
d.	The bidder will have to furnish the requisite document supporting the qualification/eligibility criteria and credential as specified in the bid document, failing which the bid is liable to be rejected.
e.	The discount, if any, should be merged with the quoted prices. If the bidder does not follow this stipulation, the bid is liable to be rejected.
f.	The bids received after specified date & time will not be considered.
g.	The bids received through Fax / Telex/photocopy will not be considered.
",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
7.	Blacklisting
",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"
Company/Firm blacklisted by Govt./PSU/Corporate organization are not eligible to Bid. If at any stage of bidding process or during the currency of contract, such information comes to knowledge of Government, the Government shall have right to reject the bid or terminate the contract, as the case may be, without any compensation to the bidder.
",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
8.	Arbitration
",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"
All disputes or difference whatsoever arising between the parties out of or relating to the construction, meaning and operation or effect of the purchase order/work order or the breach thereof shall be settled by reference to arbitration by the Director, Government. The award made in pursuance thereof shall be binding on both parties. The venue of arbitration shall be Noida.",0,'L');
$pdf->SetFont('Times',"UB",15);
$pdf->MultiCell(0,10,"
9.	Force Majeure",0,'L');
$pdf->SetFont("","",15);
$pdf->MultiCell(0,10,"

If, at any time, during the continuance of the agreement, the performance in whole or in any part by either party of obligation under the agreement shall be prevented or delayed by reasons of any war, hostile acts of the enemy, civil commotion, subrogate, fire, floods, earthquakes, explosions, epidemics, strikes and quarantine restrictions by acts of God,(herein after referred to as eventualities) then provided notice of the happening of any such eventualities is given by either party to the other within two days from the date of occurrence thereon, neither party shall, by reason of such eventualities be entitled to terminate this contract agreement nor shall either party have any claim of damages against the other in respect of such non performance or delay in performance. Performance of the contract agreement shall, however be resumed as soon as practicable after such eventuality has come to an end.
 ".$graphics,0,'L');
$pdf->MultiCell(0,10,"



Person’s_name, the designation of that person of Name_of_the_bidding_agency located at address_of_the_agency having e-mail ID " .$email.  " office phone number ".$phoneNum." holds a PAN/TAN ".$pan." (upload doc). Detail of TIN. Detail of service Tax Registration ".$service." Has/have not a copy of the bid document duly signed in token of acceptance of the same is attached (upload). Has/Have not Authorization Certificate from OEM has been included in the Technical Bid. Has/ has not all Certificates & documentary proof for technical specifications given in Annexure I has been provided. Technical Compliance Statement (Annexure A) has been included/not in the Technical Bid. A list of clients with contact details, to whom the bidder has supplied the item earlier, has been included/ not in the Technical Bid. Are there import contents in the quoted item ?".$que,0,'L');
 	$pdf->MultiCell(0,10,"   By,
						    ".$role."  \n         ".$firstname." ".$lastname."\n         ".$companyname." \n         ".$add,0,'L'); 




	$pdf->Output();


?>
