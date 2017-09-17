
 <fieldset class="fieldset" id="companyInformation">
                <legend class="legend">General company information</legend>
                <div class="clearfix " id="businessTypes">
                    <div class="input-group">
                        
                        <input data-val="true" data-val-required="The BusinessTypeRequired field is required." id="BusinessTypeRequired" name="CompanyInformation.BusinessTypeRequired" type="hidden" value="True" />
                        <input class="hidden-unit-business-type" data-val="true" data-val-requiredif="The Type of organisation field is required" data-val-requiredif-dependentproperty="BusinessTypeRequired" data-val-requiredif-targetvalue="true" id="CompanyInformation_UnitBusinessType" name="CompanyInformation.UnitBusinessType" type="hidden" value="" />
                        <input class="hidden-unit-business-subtype" id="CompanyInformation_UnitBusinessSubtype" name="CompanyInformation.UnitBusinessSubtype" type="hidden" value="" />
                        <div class="help-label"><label for="CompanyInformation_UnitBusinessType">Type of organisation <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="There are several options available. Only trade Suppliers such as Private Company, Public Limited Company, Sole Trader, Partnership or Charity can respond to tenders. These type of organisations must have a unique VAT number or PPSN or Charity Number. If you are not a trade Supplier but want to receive alerts on tenders you should select the most suitable from the two remaining options available; Representative Body or Public Interest/Non-Supplier, both of which do not require an entry for VAT Number." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Type of organisation" type="button"><i class="icon-question-sign icon-large"></i></button></div>
                        <select name="" id="unit-businesstype-container-select" class="unit-business-container-select">
                            <option value=" _ " id="none-unit-businesstype-option">-- Select Type of Organisation --</option>
                                <option id="1_6"  value="1_6">Private Company</option>
                                <option id="1_7"  value="1_7">Public Limited Company</option>
                                <option id="1_8"  value="1_8">Sole Trader</option>
                                <option id="1_11"  value="1_11">Partnership</option>
                                <option id="1_9"  value="1_9">Charity Organisation</option>
                                <option id="2_5"  value="2_5">Representative Body</option>
                                <option id="2_10"  value="2_10">Public Interest/Non-Supplier</option>
                        </select>
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.UnitBusinessType" data-valmsg-replace="true"></span>
                    </div>
                    <div class="input-group ">
                        <div class="clearfix" id="NaceCodeDiv">
                            <input data-val="true" data-val-required="The NaceCodeRequired field is required." id="NaceCodeRequired" name="CompanyInformation.NaceCodeRequired" type="hidden" value="True" />
                            <input class="hidden-nace-code" data-val="true" data-val-requiredif="The Type of Business Activity field is required" data-val-requiredif-dependentproperty="NaceCodeRequired" data-val-requiredif-targetvalue="true" id="CompanyInformation_NaceCode" name="CompanyInformation.NaceCode" type="hidden" value="" />
                            <div class="help-label"><label for="CompanyInformation_NaceCode">Type of Business Activity <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="Please refer to the European industrial activity classification (NACE Codes) for detailed explanations of each business type at &lt;a href=&#39;http://www.cso.ie/px/u/NACECoder/NACEItems/searchnace.asp&#39;>http://www.cso.ie/px/u/NACECoder/NACEItems/searchnace.asp&lt;/a>. &lt;br/>Representative Bodies, Journalists, Researchers, Students and Public Interest individuals do not need to make a selection and should select &#39;Not Applicable&#39;." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Type of Business Activity" type="button"><i class="icon-question-sign icon-large"></i></button></div>
                            <select name="select_type_business" id="select-nace-codes" class="select-nace-code">
                                <option value="">-- Not Applicable --</option>
                                    <option value="1" >A AGRICULTURE, FORESTRY AND FISHING</option>
                                    <option value="2" >B MINING AND QUARRYING</option>
                                    <option value="3" >C MANUFACTURING</option>
                                    <option value="4" >D ELECTRICITY, GAS, STEAM AND AIR CONDITIONING SUPPLY</option>
                                    <option value="5" >E WATER SUPPLY; SEWERAGE, WASTE MANAGEMENT AND REMEDIATION ACTIVITIES</option>
                                    <option value="6" >F CONSTRUCTION</option>
                                    <option value="7" >G WHOLESALE AND RETAIL TRADE; REPAIR OF MOTOR VEHICLES AND MOTORCYCLES</option>
                                    <option value="8" >H TRANSPORTATION AND STORAGE</option>
                                    <option value="9" >I ACCOMMODATION AND FOOD SERVICE ACTIVITIES</option>
                                    <option value="10" >J INFORMATION AND COMMUNICATION</option>
                                    <option value="11" >K FINANCIAL AND INSURANCE ACTIVITIES</option>
                                    <option value="12" >L REAL ESTATE ACTIVITIES</option>
                                    <option value="13" >M PROFESSIONAL, SCIENTIFIC AND TECHNICAL ACTIVITIES</option>
                                    <option value="14" >N ADMINISTRATIVE AND SUPPORT SERVICE ACTIVITIES</option>
                                    <option value="15" >O PUBLIC ADMINISTRATION AND DEFENCE; COMPULSORY SOCIAL SECURITY</option>
                                    <option value="16" >P EDUCATION</option>
                                    <option value="17" >Q HUMAN HEALTH AND SOCIAL WORK ACTIVITIES</option>
                                    <option value="18" >R ARTS, ENTERTAINMENT AND RECREATION</option>
                                    <option value="19" >S OTHER SERVICE ACTIVITIES</option>
                                    <option value="20" >T ACTIVITIES OF HOUSEHOLDS AS EMPLOYERS; U0NDIFFERENTIATED GOODS- AND SERVICES-PRODUCING ACTIVITIES OF HOUSEHOLDS FOR OWN USE</option>
                                    <option value="21" >U ACTIVITIES OF EXTRATERRITORIAL ORGANISATIONS AND BODIES</option>
                            </select>
                            <span class="field-validation-valid" data-valmsg-for="CompanyInformation.NaceCode" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="input-group no-margin span6">
                        <div class="help-label"><label for="CompanyInformation_OfficialName">Company name <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="Please enter the legal registered name of the company." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Company name" type="button"><i class="icon-question-sign icon-large"></i></button></div>
                        <input class="span12" data-val="true" data-val-length="The field Company name must be a string with a maximum length of 200" data-val-length-max="200" data-val-required="The Company name field is required" id="CompanyInformation_OfficialName" name="CompanyInformation.OfficialName" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.OfficialName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="input-group span6">
                        <div><div class="help-label"><label for="CompanyInformation_OrganisationNo">VAT Number (or Organisation Number) <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="Suppliers must enter a valid VAT number here or Charity number or PPS number for Sole Traders and Partnerships. Representative Bodies, Journalists, Researchers, Students and Public Interest parties can leave this blank. A VAT number can only be registered once. If your VAT number is already registered you should contact the Company Administrator and have them add you as an additional company user." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="VAT Number (or Organisation Number)" type="button"><i class="icon-question-sign icon-large"></i></button></div><em id="vat-optional-text" data-vat-optional class="hidden">(optional)</em></div>
                        
                        <input class="span12" data-val="true" data-val-length="The field VAT Number (or Organisation Number) must be a string with a maximum length of 50" data-val-length-max="50" data-val-requiredif="The VAT Number (or Organisation Number) field is required" data-val-requiredif-dependentproperty="SkipVatValidation" data-val-requiredif-targetvalue="false" id="vatNr" name="CompanyInformation.OrganisationNo" style="margin-top:1px;" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.OrganisationNo" data-valmsg-replace="true"></span>
                    </div>

                    <div class="hidden">
                        <div class="input-group">
                            <div class="help-label">
                                <em data-vat-optional class="hidden"><br /></em>
                                <label>External search service</label>
                            </div>
                            <select id="externalSearchService" class="select-external-search" name="SelectedExternalService" style="margin-top: 3px;">
                                <option value="None" selected>-- Select service to use --</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <div class="help-label">
                                <em data-vat-optional class="hidden"><br /></em>
                            </div>

                            <div class="input-group">
                                <input class="btn btn-search-external" id="searchExternal" type="button" value="Search">
                            </div>
                        </div>
                    </div>

                    <div class="input-group " id="vatCheckbox">
                        <input class="hidden skip-vat-validation-chk" data-val="true" data-val-required="The Invalid organisation number. field is required." id="SkipVatValidation" name="CompanyInformation.SkipVatValidation" type="checkbox" value="true" /><input name="CompanyInformation.SkipVatValidation" type="hidden" value="false" />
                    </div>
                </div>
                <div class="clearfix">
                    <div class="input-group">
                        <div class="help-label"><label for="CompanyInformation_Address">Address <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="Please enter the legal registered address of the company." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Address" type="button"><i class="icon-question-sign icon-large"></i></button></div>
                        <input data-val="true" data-val-length="The field Address must be a string with a maximum length of 100" data-val-length-max="100" data-val-required="The Address field is required" id="CompanyInformation_Address" name="CompanyInformation.Address" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.Address" data-valmsg-replace="true"></span>
                    </div>
                    <div class="input-group">
                        <div class="help-label"><label for="CompanyInformation_PostalCode">County and/or Post Code</label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="If the legal registered address of the company is in the Republic of Ireland, you must enter the county. All other companies must enter the address postal code." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="County and/or Post Code" type="button"><i class="icon-question-sign icon-large"></i></button></div>
                        <input data-val="true" data-val-length="The field County and/or Post Code must be a string with a maximum length of 50" data-val-length-max="50" id="CompanyInformation_PostalCode" name="CompanyInformation.PostalCode" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.PostalCode" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="input-group">
                        <label for="CompanyInformation_City">City <span class="required">*</span></label>
                        <input data-val="true" data-val-length="The field City must be a string with a maximum length of 50" data-val-length-max="50" data-val-required="The City field is required" id="CompanyInformation_City" name="CompanyInformation.City" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.City" data-valmsg-replace="true"></span>
                    </div>
                    <div class="input-group">
                        <label for="CompanyInformation_Country">Country <span class="required">*</span></label>
                        <select data-val="true" data-val-regex="The Country field is required" data-val-regex-pattern="(?!NoValueSelected\b|^$)\b\w+" id="CompanyInformation_Country" name="CompanyInformation.Country"><option value="">No value selected</option>
<option value="AL">Albania</option>
<option value="AD">Andorra</option>
<option value="AR">Argentina</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="BD">Bangladesh</option>
<option value="BE">Belgium</option>
<option value="BJ">Benin</option>
<option value="BA">Bosnia and Hercegovia</option>
<option value="BR">Brazil</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="CA">Canada</option>
<option value="CN">China</option>
<option value="HR">Croatia</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="EG">Egypt</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GR">Greece</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JP">Japan</option>
<option value="KE">Kenya</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MT">Malta</option>
<option value="MX">Mexico</option>
<option value="MC">Monaco</option>
<option value="ME">Montenegro</option>
<option value="MZ">Mozambique</option>
<option value="NL">Netherlands</option>
<option value="NZ">New Zealand</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NO">Norway</option>
<option value="OT">Other</option>
<option value="PK">Pakistan</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="SA">Saudi Arabia</option>
<option value="RS">Serbia</option>
<option value="CS">Serbia and Montenegro (Obsolete)</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="ZA">South Africa</option>
<option value="KR">South Korea</option>
<option value="ES">Spain</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="TW">Taiwan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TG">Togo</option>
<option value="TR">Turkey</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="UK">United Kingdom</option>
<option value="US">United States of America</option>
<option value="UY">Uruguay</option>
<option value="VN">Vietnam</option>
<option value="ZM">Zambia</option>
</select>
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.Country" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="clearfix">
                    <label for="CompanyInformation_Description">Description of business <em>Max 500 characters</em> <span class="required">*</span></label>
                    <textarea class="span6" cols="20" data-val="true" data-val-length="The field Description of business &lt;em>Max 500 characters&lt;/em> must be a string with a maximum length of 500" data-val-length-max="500" data-val-required="The Description of business &lt;em>Max 500 characters&lt;/em> field is required" id="CompanyInformation_Description" name="CompanyInformation.Description" rows="4">
</textarea>
                    <span class="field-validation-valid" data-valmsg-for="CompanyInformation.Description" data-valmsg-replace="true"></span>
                </div>
            </fieldset>
            <fieldset class="fieldset" id="contactInformation">
                <legend class="legend">Company contact information</legend>
                
<script type="text/javascript">

    /*TODO: need a way to remove it from here*/
    $(function () {
        //WORKAROUND: To reverse the bootstrap button function to jquery ui one
        //https://github.com/twbs/bootstrap/issues/6094
        if ($.fn.button.noConflict) {
            $.fn.btn = $.fn.button.noConflict();
        }
        //WORKAROUND: To reverse the bootstrap button function to jquery ui one

        $(document).on("click", "#btn_" + "CompanyInformation_CompanyContactInformation_EmailAddress", function (e) {
            e.preventDefault();
            var validationResult = $("#form").validate().element("#CompanyInformation_CompanyContactInformation_EmailAddress");
            if (validationResult) {
                $.ajax({
                    type: "POST",
                    url: "/ctm/Company/CompanyRegistration/TestEmail",
                    data:
                    {
                        email: $("#CompanyInformation_CompanyContactInformation_EmailAddress").val()
                    },
                    success: function (data) {
                        if (data.indexOf('<div class="error-content">') > -1) {
                            showProgress("Something went wrong. Please reload the page.");
                        }
                        else {
                            showProgress("Send");
                        }
                    },
                    error: function () {
                        showProgress("Something went wrong. Please reload the page.");
                    }
                });
            }
        });

        $("#" + "div_CompanyInformation_CompanyContactInformation_EmailAddress").dialog({
            autoOpen: false,
            modal: true,
            draggable: false,
            resizable: false,
            title: "Status",
            buttons: {
                "OK": function () {
                    $(this).dialog('close');
                }
            }
        });
    });


    function showProgress(message) {
        $('#' + "div_CompanyInformation_CompanyContactInformation_EmailAddress").text(message);
        $('#' + "div_CompanyInformation_CompanyContactInformation_EmailAddress").dialog('open');
    }

</script>
<div class="clearfix">
    <div class="help-label"><label for="CompanyInformation_CompanyContactInformation_ContactName">Point of contact <span class="required">*</span></label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="This is the main business contact for the company. The phone number and email address should be generic company details i.e. sales@abc.com." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Point of contact" type="button"><i class="icon-question-sign icon-large"></i></button></div>
    <input class="span6" data-val="true" data-val-length="The field Point of contact must be a string with a maximum length of 64" data-val-length-max="64" data-val-required="The Point of contact field is required" id="CompanyInformation_CompanyContactInformation_ContactName" name="CompanyInformation.CompanyContactInformation.ContactName" type="text" value="" />
    <span class="field-validation-valid" data-valmsg-for="CompanyInformation.CompanyContactInformation.ContactName" data-valmsg-replace="true"></span>
</div>
<div class="clearfix">
    <div class="input-group">
        <label for="CompanyInformation_CompanyContactInformation_Phone_PhoneType">Phone type <span class="required">*</span></label>
        <select data-val="true" data-val-required="The Phone type field is required" id="CompanyInformation_CompanyContactInformation_Phone_PhoneType" name="CompanyInformation.CompanyContactInformation.Phone.PhoneType"><option value="Default">Default</option>
<option value="ContactPhone">Contact</option>
<option value="WorkPhone">Work</option>
<option value="HomePhone">Home</option>
<option value="CellularPhone">Mobile</option>
<option value="Pager">Pager</option>
<option value="UnitPhone">Company phone</option>
<option value="Fax">Fax</option>
</select>
        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.CompanyContactInformation.Phone.PhoneType" data-valmsg-replace="true"></span>
    </div>
    <div class="input-group">
        <label for="CompanyInformation_CompanyContactInformation_Phone_Phone">Phone (+353 17654321) <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Phone (+353 17654321) must be a string with a maximum length of 31" data-val-length-max="31" data-val-regex="Phone number form e.g. +353 17654321" data-val-regex-pattern="(((\+)|(00))\d{1,3}\s((((\(){1,1}\d{1,4}(\)){1,1})|(\d{1,4}))\s)?\d{1,15})" data-val-required="The Phone (+353 17654321) field is required" id="CompanyInformation_CompanyContactInformation_Phone_Phone" name="CompanyInformation.CompanyContactInformation.Phone.Phone" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.CompanyContactInformation.Phone.Phone" data-valmsg-replace="true"></span>
    </div>
</div>
<div class="clearfix">
    <div class="input-group form-horizontal span12">
        <label for="CompanyInformation_CompanyContactInformation_EmailAddress">Email <span class="required">*</span></label>
        <input class="span6" data-val="true" data-val-length="The field Email must be a string with a maximum length of 254" data-val-length-max="254" data-val-regex="The field Email must contain an email address, e.g. myaddress@domain.com" data-val-regex-pattern="[a-zA-Z0-9]{1}([a-zA-Z0-9\.\-_])*@[a-zA-Z0-9]{1}([a-zA-Z0-9\.\-_])*\.[a-zA-Z]{2,10}" data-val-required="The Email field is required" id="CompanyInformation_CompanyContactInformation_EmailAddress" name="CompanyInformation.CompanyContactInformation.EmailAddress" type="text" value="" />
        <a class="btn" href="#" id="btn_CompanyInformation_CompanyContactInformation_EmailAddress" title="Test"><span>Test</span></a>
        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.CompanyContactInformation.EmailAddress" data-valmsg-replace="true"></span>
        <div id="div_CompanyInformation_CompanyContactInformation_EmailAddress"></div>
    </div>
</div>



            </fieldset>
            <fieldset class="fieldset" id="userInformation">
                <legend class="legend">Company Administrator Information</legend>
                <p>
                    <button id="copyInfo" class="btn"><i class="icon-copy icon-right-space"></i>Copy from above</button>
                </p>
                <div class="clearfix">
                    
<script type="text/javascript">

    /*TODO: need a way to remove it from here*/
    $(function () {
        $(document).on("click", "#btn_" + "UserInformation_UserContactInformation_EmailAddress", function (e) {
            e.preventDefault();
            var validationResult = $("#form").validate().element("#UserInformation_UserContactInformation_EmailAddress");
            if (validationResult) {
                $.ajax({
                    type: "POST",
                    url: "/ctm/Company/CompanyRegistration/TestEmail",
                    data:
                    {
                        email: $("#UserInformation_UserContactInformation_EmailAddress").val()
                    },
                    success: function (data) {
                        if (data.indexOf('<div class="error-content">') > -1) {
                            showProgress("Something went wrong. Please reload the page.");
                        }
                        else {
                            showProgress("Send");
                        }
                    },
                    error: function () {
                        showProgress("Something went wrong. Please reload the page.");
                    }
                });
            }
        });

        $("#" + "div_UserInformation_UserContactInformation_EmailAddress").dialog({
            autoOpen: false,
            modal: true,
            draggable: false,
            resizable: false,
            title: "Status",
            buttons: {
                "OK": function () {
                    $(this).dialog('close');
                }
            }
        });
    });


    function showProgress(message) {
        $('#' + "div_UserInformation_UserContactInformation_EmailAddress").text(message);
        $('#' + "div_UserInformation_UserContactInformation_EmailAddress").dialog('open');
    }

</script>
<div class="clearfix">
    <div class="input-group">
        <label for="UserInformation_UserContactInformation_FirstName">First name <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field First name must be a string with a maximum length of 30" data-val-length-max="30" data-val-required="The First name field is required" id="UserInformation_UserContactInformation_FirstName" name="UserInformation.UserContactInformation.FirstName" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.FirstName" data-valmsg-replace="true"></span>
    </div>
    <div class="input-group">
        <label for="UserInformation_UserContactInformation_LastName">Last name <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Last name must be a string with a maximum length of 30" data-val-length-max="30" data-val-required="The Last name field is required" id="UserInformation_UserContactInformation_LastName" name="UserInformation.UserContactInformation.LastName" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.LastName" data-valmsg-replace="true"></span>
    </div>
</div>
<div class="clearfix">
    <div class="input-group">
        <label for="UserInformation_UserContactInformation_Title">Title</label>
        <input data-val="true" data-val-length="The field Title must be a string with a maximum length of 100" data-val-length-max="100" id="UserInformation_UserContactInformation_Title" name="UserInformation.UserContactInformation.Title" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.Title" data-valmsg-replace="true"></span>
    </div>
</div>
<div class="clearfix">
    <div class="input-group">
        <label for="UserInformation_UserContactInformation_Phone_PhoneType">Phone type <span class="required">*</span></label>
        <select data-val="true" data-val-required="The Phone type field is required" id="UserInformation_UserContactInformation_Phone_PhoneType" name="UserInformation.UserContactInformation.Phone.PhoneType"><option value="Default">Default</option>
<option value="ContactPhone">Contact</option>
<option value="WorkPhone">Work</option>
<option value="HomePhone">Home</option>
<option value="CellularPhone">Mobile</option>
<option value="Pager">Pager</option>
<option value="UnitPhone">Company phone</option>
<option value="Fax">Fax</option>
</select>
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.Phone.PhoneType" data-valmsg-replace="true"></span>
    </div>
    <div class="input-group">
        <label for="UserInformation_UserContactInformation_Phone_Phone">Phone (+353 17654321) <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Phone (+353 17654321) must be a string with a maximum length of 31" data-val-length-max="31" data-val-regex="Phone number form e.g. +353 17654321" data-val-regex-pattern="(((\+)|(00))\d{1,3}\s((((\(){1,1}\d{1,4}(\)){1,1})|(\d{1,4}))\s)?\d{1,15})" data-val-required="The Phone (+353 17654321) field is required" id="UserInformation_UserContactInformation_Phone_Phone" name="UserInformation.UserContactInformation.Phone.Phone" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.Phone.Phone" data-valmsg-replace="true"></span>
    </div>
</div>
<div class="clearfix">
    <div class="input-group form-horizontal span12 marginbtm">
        <label for="UserInformation_UserContactInformation_EmailAddress">Email <span class="required">*</span></label>
        <input class="span6" data-val="true" data-val-length="The field Email must be a string with a maximum length of 254" data-val-length-max="254" data-val-regex="The field Email must contain an email address, e.g. myaddress@domain.com" data-val-regex-pattern="[a-zA-Z0-9]{1}([a-zA-Z0-9\.\-_])*@[a-zA-Z0-9]{1}([a-zA-Z0-9\.\-_])*\.[a-zA-Z]{2,10}" data-val-required="The Email field is required" id="UserInformation_UserContactInformation_EmailAddress" name="UserInformation.UserContactInformation.EmailAddress" type="text" value="" />
        <a class="btn" href="#" id="btn_UserInformation_UserContactInformation_EmailAddress" title="Test"><span>Test</span></a>
        <span class="field-validation-valid" data-valmsg-for="UserInformation.UserContactInformation.EmailAddress" data-valmsg-replace="true"></span>
        <div id="div_UserInformation_UserContactInformation_EmailAddress"></div>
    </div>
</div>



                </div>
                <div class="clearfix">
                    <label for="UserInformation_PreferredLanguage" style="margin-top:10px;">Preferred language <span class="required">*</span></label>
                    <select data-val="true" data-val-regex="The Preferred language field is required" data-val-regex-pattern="(?!NoValueSelected\b|^$)\b\w+" id="UserInformation_PreferredLanguage" name="UserInformation.PreferredLanguage"><option value="">No value selected</option>
<option value="English">English</option>
<option value="Irish">Gaelic</option>
</select>
                    <span class="field-validation-valid" data-valmsg-for="UserInformation.PreferredLanguage" data-valmsg-replace="true"></span>
                </div>
            </fieldset>

            <fieldset class="fieldset" id="credentialsInformation">
                <legend class="legend">
                    Company Administrator Credentials
                </legend>
                <div class="clearfix">
    <div class="clearfix pull-right span8">
            <div class="clearfix alert">
                <i class="icon-warning-sign icon-right-space"></i>
                <strong>Passwords policy</strong>
                <ul style="list-style-type:square">
                        <li class="header-section">Password can contain only  alphabets a-z, A-Z, numbers 0-9 and special characters ! @ # $ % * _</li>
                        <li class="header-section">Password must be at least 6 characters long.</li>
                        <li class="header-section">Password must contain at least one letter</li>
                        <li class="header-section">Password must contain at least one number.</li>
                </ul>
            </div>
    </div>
    <div class="clearfix">
        <label for="Credentials_Username">Username <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Username must be a string with a maximum length of 40" data-val-length-max="40" data-val-regex="Username must be longer than 6 characters and not contain characters &amp;, &quot;, &lt;, >" data-val-regex-pattern="^((?![\&amp;\&quot;\&lt;\>\&#39;]).){6,40}$" data-val-required="The Username field is required" id="Credentials_Username" name="Credentials.Username" type="text" value="" />
        <span class="field-validation-valid" data-valmsg-for="Credentials.Username" data-valmsg-replace="true"></span>

        <label for="Credentials_Password">Password <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Password must be a string with a maximum length of 40" data-val-length-max="40" data-val-regex="The field Password must meet the password policy requirements" data-val-regex-pattern="^(?=.*[A-Za-z])(?=.*[0-9])[a-zA-Z0-9!@#$%\*\_]{6,}$" data-val-required="The Password field is required" id="Credentials_Password" name="Credentials.Password" type="password" />
        <span class="field-validation-valid" data-valmsg-for="Credentials.Password" data-valmsg-replace="true"></span>

        <label for="Credentials_ConfirmPassword">Confirm password <span class="required">*</span></label>
        <input data-val="true" data-val-length="The field Confirm password must be a string with a maximum length of 40" data-val-length-max="40" data-val-required="The Confirm password field is required" id="Credentials_ConfirmPassword" name="Credentials.ConfirmPassword" type="password" />
        <span class="field-validation-valid" data-valmsg-for="Credentials.ConfirmPassword" data-valmsg-replace="true"></span>
    </div>
</div>


            </fieldset>

            <fieldset class="fieldset " id="emailsForInvitationSection">
                <legend class="legend">Email Addresses for Alerts</legend>
                <button id="btnAddEmail" class="btn marginbtm"><i></i>Add email</button>
                <div class="clearfix alert alert-info pull-right span8">
                    <i class="icon-info-sign icon-right-space"></i>
                    <strong>Alert emails</strong>
                    Please enter the email addresses for ALL company users who you wish to receive copies of tender invitations. Click Add email to add a new email address.
                </div>
                <div class="clearfix" id="emailsForInvitation">
                    
                </div>
            </fieldset>

            <ul class="nav nav-list span6 marginbtm">
                <li>
                    <a href="/pub/auction_rules.asp" class="" id="commerceRulesLink">Terms & Conditions</a>
                </li>
                <li>
                    <a href="/pub/fees.asp" class="" id="privacyPolicyLink">Privacy policy</a>
                </li>
            </ul>

            <div class="clearfix span8">
                <label for="AcceptRules" class="checkbox h4">
                    <input data-val="true" data-val-acceptrules="You must read and accept the rules and terms to complete your registration" id="AcceptRules" name="AcceptRules" type="checkbox" value="true" /><input name="AcceptRules" type="hidden" value="false" />
                    <strong>I have read the terms and accept them.</strong>
                </label>
                <span class="field-validation-valid" data-valmsg-for="AcceptRules" data-valmsg-replace="true"></span>
            </div>
        </div>
<div class="action-bar"><ul><li><a class="btn btn-primary" href="#" id="actionSave" title="Save">Save</a></li><li><a class="btn" href="#" id="actionCancel" title="Cancel">Cancel</a></li></ul></div></form>
</div>

<div id="dialog-confirm" title="Warning" style="display: none;">
    <p><i class="icon-warning-sign icon-right-space yellow-icon"></i>You may have done some changes in the form, click on Stay on page if you want to save your changes before you leave otherwise click Continue</p>
</div>

                </div>
            </div>
        </div>

    </div>