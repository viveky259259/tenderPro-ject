<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align:left;
}
.flex-container > * {
    padding: 5px;
    -webkit-flex: 1 100%;
    flex: 1 100%;	
}
header {background: #000000;color:#FFFFFF;}
.rTable {
  	display: table;
  	width:100%
	text-align: center;
}
.rTableRow {
    display: -webkit-table-row;
  	display: table-row;
}
.rTableHeading {
  	display: table-header-group;
  	background-color: #ddd;
}
.rTableCell, .rTableHead {
  	display: table-cell;
  	padding:  1px 10px;
  	border: 0px solid #999999;
}
.rTableHeading {
  	display: table-header-group;
  	background-color: #ddd;
  	font-weight: bold;
}
.rTableFoot {
  	display: table-footer-group;
  	font-weight: bold;
  	background-color: #ddd;
}
.rTableBody {
  	display: table-row-group;
}


</style>
</head>
<body>

<div class="flex-container">
<header>
 <center> <h1>Tender Details Entry Format</h1></center>
</header>
<form action="w33.php" method="POST">
<fieldset>
<div class="rTable">
<div class="rTableRow">
<div class="rTableCell">Area</div>
<div class="rTableCell"><input type="text" name="area" placeholder="Enter Area" required="True" ></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Unit/Project</div>
<div class="rTableCell"><input type="text" name="unit_project" placeholder="Enter Unit/Project" required="True"></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Indenting Department</div>
<div class="rTableCell"><input type="text" name="indenting_department" placeholder="Enter Indenting Department" required="True"  ></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Procuring Department/Executing Department</div>
<div class="rTableCell"><input type="text" name="procuring_department" placeholder="Enter Procuring Department/Executing Department" required="True" ></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Tender Ref. No.</div>
<div class="rTableCell"><input type="text" name="tender_ref_no" placeholder="Enter Tender Ref. No." required="True" ></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Tender Type</div>
<div class="rTableCell">
<select name="tender_type">
        <option value="Open Tender" name="open_tender">Open Tender</option>
        <option value="Single Tender" name="single_tender">Single Tender</option>
        <option value="Limited Tender" name="limited_tender">Limited Tender</option>
		<option value="Global Tender" name="global_tender">Global Tender</option >
    </select>
</div>
</div>
<div class="rTableRow">
<div class="rTableCell">Bid Validity days</div>
<div class="rTableCell"><input type="number" name="bid_validity_days" placeholder="Enter number of days" min="0" required="True"></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Type of Bidding</div>
<div class="rTableCell">
<select name="bidding_type">
        <option value="Single Envelope Bidding">Single Envelope Bidding</option>
        <option value="Two-Envelope Bidding">Two-Envelope Bidding</option>
        <option value="Multiple Envelope Bidding ">Multiple Envelope Bidding </option>
    </select>
</div>
</div>
<div class="rTableRow">
<div class="rTableCell">Location</div>
<div class="rTableCell"><input type="text" name="location" required="True" placeholder="Enter Location"/></div>
</div>
<div class="rTableRow">
<div class="rTableCell">First Announcement Date</div>
<div class="rTableCell"><input type="date" name="first_announcement_date"  required="True" placeholder="Enter First Announcement Date" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Publication Date on Portal</div>
<div class="rTableCell"><input type="date" name="publication_date_on_portal" required="True">
At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="publication_date_at_portal" required="True" /></div>                        
</div>
<div class="rTableRow">
<div class="rTableCell">Last Date of Document Collection</div>
<div class="rTableCell"><input type="date" name="last_date_of_document_collection" required="True">
Up To<input type="time" name="last_date_of_document_collection_upto" required="True" /></div>                        
</div>
<div class="rTableRow">
<div class="rTableCell">Last Date for Submission</div>
<div class="rTableCell"><input type="date" name="last_date_for_submission" required="True">
Up To<input type="time" name="last_date_for_submission_upto" required="True" /></div>                        
</div>   
<div class="rTableRow">
<div class="rTableCell">Opening Date</div>
<div class="rTableCell"><input type="date" name="opening_date" required="True">
At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="opening_date_upto" required="True" /></div>                        
</div>                      
<div class="rTableRow">
<div class="rTableCell">Sale Open Date</div>
<div class="rTableCell"><input type="date" name="sale_open_date" required="True"></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Sale Close Date</div>
<div class="rTableCell"><input type="date" name="sale_close_date" required="True">
At&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="sale_close_date_at" required="True" /></div>                        
</div>
<div class="rTableRow">
<div class="rTableCell">Tender Title</div>
<div class="rTableCell"><input type="text" name="tender_title" placeholder="Enter Tender Title" required="True"/></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Product Category</div>
<div class="rTableCell"><input type="text" name="product_category" placeholder="Enter Product Category" required="True" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Sub Category</div>
<div class="rTableCell"><input type="text" name="sub_category" placeholder="Enter Sub Category" required="True" /></div>
</div>
<div class="rTableRow"><center>
Tender Value<br><small-caps>(Write the amount without any comma(,) or dot(.).<br>
For example, INR 10000000, USD 10000 etc.
or select None if tender value is not specified.)</small-caps></br><center></div>
<div class="rTableRow">
<div class="rTableCell">Currency</div>
<div class="rTableCell"><input type="number" name="currency" placeholder="Enter Currency" required="True" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Value</div>
<div class="rTableCell"><input type="number" name="value" placeholder="Enter Value" required="True" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Document Cost</div>
<div class="rTableCell"><input type="number" name="document_cost" placeholder="Enter Document Cost" required="True" /></div>
</div>
<div class="rTableRow">
<center>EMD Fee Details</center></div>
<div class="rTableRow">
<div class="rTableCell">EMD Amount(INR)</div>
<div class="rTableCell"><input type="number" name="emd" placeholder="Enter EMD" required="True" /></div>
</div> 
<div class="rTableRow">
<div class="rTableCell">EMD Exemption Allowed</div>
<div class="rTableCell">
<select name="emd_exeption_allowed">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>
</div>
<div class="rTableRow">
<div class="rTableCell">EMD Percentage</div>
<div class="rTableCell">

    <input type="text" name="myPercent" />%

​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​</div>
</div>
<div class="rTableRow">
<div class="rTableCell">EMD Payable To</div>
<div class="rTableCell"><input type="text" name="emd_payable_to"  required="True" placeholder="Enter EMD Payable To" /></div>0
</div>
<div class="rTableRow">
<div class="rTableCell">EMD Payable At</div>
<div class="rTableCell"><input type="text" name="emd_payable_at"  required="True" placeholder="Enter EMD Payable At" /></div>
</div>                         

<div class="rTableRow">
<div class="rTableCell">Work Description</div>
<div class="rTableCell"><textarea name="work_description" rows="4" cols="50">
</textarea></div>
</div>                       
<div class="rTableRow">
<div class="rTableCell">Pre-Qualification</div>
<div class="rTableCell"><textarea name="pre_qualification" rows="4" cols="50">
</textarea></div>
</div>    
<div class="rTableRow">
<div class="rTableCell">Pre-Bid Meeting date</div>
<div class="rTableCell"><input type="date" name="pre_bid_meet" /></div>
</div> 
<div class="rTableRow">
<div class="rTableCell">Pre-Bid Meeting Address</div>
<div class="rTableCell"><textarea name="pre_bid_meet_addr" rows="4" cols="50"></textarea></div>
</div>                                    
</div>
</fieldset>
<center>
<button type="submit">Submit</button>
 </center>
 </form>


</body>
</html>
