<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Contact Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="contact.css">
	<script src="contact.js"></script>
	
<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
</head>

<body class="extra_media">
<?php
        $countries = array("AFGHANISTAN"=>"Afghanistan","ALAND INSLANDS"=>"Aland Islands","ALBANIA"=>"Albania","ALGERIA"=>"Algeria","AMERICAN SAMOA"=>"American Samoa",
        "ANDORRA"=>"Andorra","ANGOLA"=>"Angola","ANGUILLA"=>"Anguilla","ANTARCTICA"=>"Antarctica","ANTIGUA AND BARBUDA"=>"Antigua and Barbuda","ARGENTINA"=>"Argentina",
        "ARMENIA"=>"Armenia","ARUBA"=>"Aruba","AUSTRALIA"=>"Australia","AUSTRIA"=>"Austria","AZERBAIJAN"=>"Azerbaijan","BAHAMAS"=>"Bahamas","BAHRAIN"=>"Bahrain",
        "BANGLADESH"=>"Bangladesh","BARBADOS"=>"Barbados","BELARUS"=>"Belarus","BELGIUM"=>"Belgium","BELIZE"=>"Belize","BENIN"=>"Benin","BERMUDA"=>"Bermuda",
        "BHUTAN"=>"Bhutan","BOLIVIA"=>"Bolivia","BOSNIA AND HERZEGOVINA"=>"Bosnia and Herzegovina","BOTSWANA"=>"Botswana","BOUVET"=>"Bouvet Island","BRAZIL"=>"Brazil",
        "BRITISH INDIAN OCEAN TERRITORY"=>"British Indian Ocean Territory","BRITISH VIRGIN ISLANDS"=>"British Virgin Islands","BRUNEI"=>"Brunei","BULGARIA"=>"Bulgaria",
        "BURKINA FASO"=>"Burkina Faso","BURUNDI"=>"Burundi","CAMBODIA"=>"Cambodia","CAMEROON"=>"Cameroon","CANADA"=>"Canada","CAPE VERDE"=>"Cape Verde",
        "CAYMAN ISLANDS"=>"Cayman Islands","CENTRAL AFRICAN REPUBLIC"=>"Central African Republic","CHAD"=>"Chad","CHILE"=>"Chile","CHINA"=>"China",
        "CHRISTMAS ISLANDS"=>"Christmas Island","COCOS ISLANDS"=>"Cocos Island","COLOMBIA"=>"Colombia","COMOROS"=>"Comoros","CONGO"=>"Congo",
        "CONGO, DEMOCRATIC REPUBLIC OF"=>"Congo, Democratic Republic of","COOK ISLANDS"=>"Cook Islands","COSTA RICA"=>"Costa Rica","IVORY COAST"=>"Ivory Coast",
        "CROATIA"=>"Croatia","CUBA"=>"Cuba","CYPRUS"=>"Cyprus","CZECH REPUBLIC"=>"Czech Republic","DENMARK"=>"Denmark","DISPUTED TERRITORY"=>"Disputed Territory",
        "DJIBOUTI"=>"Djibouti","DOMINICA"=>"Dominica","DOMINICAN REPUBLIC"=>"Dominican Republic","ECUADOR"=>"Ecuador","EGYPT"=>"Egypt","EL SALVADOR"=>"El Salvador",
        "EQUATORIAL GUINEA"=>"Equatorial Guinea","ERITREA"=>"Eritrea","ESTONIA"=>"Estonia","ETHIOPIA"=>"Ethiopia","FALKLAND ISLANDS"=>"Falkland Islands",
        "FAROE ISLANDS"=>"Faroe Islands","FIJI"=>"Fiji","FINLAND"=>"Finland","FRANCE"=>"France","FRENCH GUIANA"=>"French Guiana","FRENCH POLYNESIA"=>"French Polynesia",
        "FRENCH SOUTHERN TERRITORIES"=>"French Southern Territories","GABON"=>"Gabon","GAMBIA"=>"Gambia","GEORGIA"=>"Georgia","GERMANY"=>"Germany","GHANA"=>"Ghana",
        "GIBRALTAR"=>"Gibraltar","GREECE"=>"Greece","GREENLAND"=>"Greenland","GRENADA"=>"Grenada","GUADELOUPE"=>"Guadeloupe","GUAM"=>"Guam","GUATEMALA"=>"Guatemala",
        "GUERNSEY"=>"Guernsey","GUINEA"=>"Guinea","GUINEA-BISAAU"=>"Guinea-Bissau","GUYANA"=>"Guyana","HAITI"=>"Haiti",
        "HEARD ISLANDS AND MCDONALD ISLANDS"=>"Heard Islands and McDonald Islands","HONDURAS"=>"Honduras","HONG KONG"=>"Hong Kong","HUNGARY"=>"Hungary","ICELAND"=>"Iceland",
        "INDIA"=>"India","INDONESIA"=>"Indonesia","IRAN"=>"Iran","IRAQ"=>"Iraq","xe"=>"Iraq-Saudi Arabia Neutral Zone","IRELAND"=>"Ireland",
        "im"=>"Isle of Man","ISRAEL"=>"Israel","ITALY"=>"Italy","ci"=>"Ivory Coast","JAMAICA"=>"Jamaica","JAPAN"=>"Japan","je"=>"Jersey",
        "JORDAN"=>"Jordan","KAZAKHSTAN"=>"Kazakhstan","KENYA"=>"Kenya","KIRIBATI"=>"Kiribati","KUWAIT"=>"Kuwait","KYRGYZSTAN"=>"Kyrgyzstan","LAOS"=>"Laos",
        "LATVIA"=>"Latvia","LEBANON"=>"Lebanon","LESOTHO"=>"Lesotho","LIBERIA"=>"Liberia","LIBYA"=>"Libya","LIECHTENSTEIN"=>"Liechtenstein","LITHUANIA"=>"Lithuania",
        "LUXEMBOURG"=>"Luxembourg","MACAO"=>"Macao","MACEDONIA"=>"Macedonia","MADAGASCAR"=>"Madagascar","MALAWI"=>"Malawi","MALAYSIA"=>"Malaysia","MALDIVES"=>"Maldives",
        "MALI"=>"Mali","MALTA"=>"Malta","MARSHALL ISLANDS"=>"Marshall Islands","mg"=>"Martinique","MAURITANIA"=>"Mauritania","MAURITIUS"=>"Mauritius",
        "MAYOTTE"=>"Mayotte","MEXICO"=>"Mexico","MICRONESIA"=>"Micronesia","MOLDOVA"=>"Moldova","MONACO"=>"Monaco","MONGOLIA"=>"Mongolia","MOTENEGRO"=>"Montenegro",
        "MONTSERRAT"=>"Montserrat","MOROCCO"=>"Morocco","MOZAMBIQUE"=>"Mozambique","MYANMAR"=>"Myanmar","NAMIBIA"=>"Namibia","NAURU"=>"Nauru","NEPAL"=>"Nepal",
        "NETHERLANDS"=>"Netherlands","NETHERLANDS ANTILLES"=>"Netherlands Antilles","NEW CALEDONIA"=>"New Caledonia","NEW ZEALAND"=>"New Zealand","NICARAGUA"=>"Nicaragua",
        "NIGER"=>"Niger","NIGERIA"=>"Nigeria","NIUE"=>"Niue","NORFOLK ISLAND"=>"Norfolk Island","NORTHERN MARIANA ISLANDS"=>"Northern Mariana Islands","kp"=>"North Korea",
        "NORWAY"=>"Norway","OMAN"=>"Oman","PAKISTAN"=>"Pakistan","PALAU"=>"Palau","PALESTINIAN TERRITORY"=>"Palestinian Territory","PANAMA"=>"Panama",
        "PAPUA NEW GUINEA"=>"Papua New Guinea","PARAGUAY"=>"Paraguay","PERU"=>"Peru","PHILLIPINES"=>"Philippines","PITCAIRN ISLANDS"=>"Pitcairn Islands","POLAND"=>"Poland",
        "PORTUGAL"=>"Portugal","PUERTO RICO"=>"Puerto Rico","QATAR"=>"Qatar","REUNION"=>"Reunion","ROMANIA"=>"Romania","RUSSIA"=>"Russia","RWANDA"=>"Rwanda",
        "SAINT HELENA"=>"Saint Helena","SAINT KITTS AND NEVIS"=>"Saint Kitts and Nevis","SANT LUCIA"=>"Sant Lucia","SAINT PIERRE AND MIQUELON"=>"Saint Pierre and Miquelon",
        "SAINT VINCENT AND THE GRENADINES"=>"Sant Vincent and the Grenadines","SAMOA"=>"Samoa","SAN MARINO"=>"San Marino",
        "st"=>"S&atilde;p Tom&eacute; and Pr&iacute;ncipe","SAUDI ARABIA"=>"Saudi Arabia","SENEGAL"=>"Senegal","SERBIA"=>"Serbia",
        "cs"=>"Serbia and Montenegro","SEYCHELLES"=>"Seychelles","SIERRA LEONE"=>"Sierra Leone","SINGAPORE"=>"Singapore","SLOVAKIA"=>"Slovakia",
        "SLOVENIA"=>"Slovenia","SOLOMON ISLANDS"=>"Solomon Islands","SOMALIA"=>"Somalia","SOUTH AFRICA"=>"South Africa",
        "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS"=>"South Georgia and the South Sandwich Islands","kr"=>"South Korea","SPAIN"=>"Spain","SRI LANKA"=>"Sri Lanka","SUDAN"=>"Sudan",
        "SURINAME"=>"Suriname","SVALBARD AND JAN MAYEN ISLANDS"=>"Svalbard and Jan Mayen Islands","SWAZILAND"=>"Swaziland","SWEDEN"=>"Sweden","SWITZERLAND"=>"Switzerland",
        "SYRIA"=>"Syria","TAIWAN"=>"Taiwan","TAJIKISTAN"=>"Tajikistan","TANZANIA"=>"Tanzania","THAILAND"=>"Thailand","TIMOR-LESTE"=>"Timor-Leste","TOGO"=>"Togo",
        "TOKELAU"=>"Tokelau","TONGA"=>"Tonga","TRINIDAD AND TOBAGO"=>"Trinidad and Tobago","TUNISIA"=>"Tunisia","TURKEY"=>"Turkey","TURKMENISTAN"=>"Turkmenistan",
        "TURKS AND CAICOS ISLANDS"=>"Turks and Caicos Islands","TUVALU"=>"Tuvalu","UGANDA"=>"Uganda","UKRAINE"=>"Ukraine","UNITED ARAB EMIRATES"=>"United Arab Emirates",
        "UNITED KINGDOM"=>"United Kingdom","xd"=>"United Nations Neutral Zone","UNITED STATES"=>"United States",
        "um"=>"United States Minor Outlying Islands","vi"=>"U.S. Virgin Islands","URUGUAY"=>"Uruguay","UZBEKISTAN"=>"Uzbekistan",
        "VANUATU"=>"Vanuatu","VATICAN CITY"=>"Vatican City","VENEZUELA"=>"Venezuela","VIETNAM"=>"Vietnam","WALLIS AND FUTUNA ISLANDSA"=>"Wallis and Futuna Islands",
        "WESTERN SAHARA"=>"Western Sahara","YEMEN"=>"Yemen","ZAMBIA"=>"Zambia","ZIMBABWE"=>"Zimbabwe");
        ?>
					
                        <form class="ui-form form-contacts" onsubmit="return checkform(this);" id="myForm" action="mail.php" method="post">
						<h2 class="ctn">Contact Form</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="First Name" name="firstname" required="">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Last Name" name="lastname" required="">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" required="">
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <select class="form-control" name="countries" id="country" onchange='change_country(this.value);'>";
									?>
									<option value="select" selected>Select Country</option>
									<?php
									foreach ($countries as $code => $name){
									echo "<option value=\"$code\">$name</option>\n";
									}
									?>
									</select>
                                </div>
                                </div>
                                <!-- end col -->
								<div class="row">
								 <div class="col-sm-6 m0-p0">
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control pin" type="tel" placeholder="code" name="phonec" id="phonec" value='' readonly required="">
                                    </div>
                                </div>
									<div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Phone No." name="phone" required="">
                                    </div>
                                </div>
                                </div>

							
							<div class="col-sm-6">
							<select name="inquiry" class="form-control">
							<option value="General Inquiry">General Inquiry</option>
							<option value="Joint Venture Partnership">Joint Venture Partnership</option>
							<option value="Job Inquiry">Job Inquiry</option>
							<option value="Product Inquiry">Product Inquiry</option>
							<option value="Other">Other</option>
							</select>
							</div>


								<div class="col-xs-12 col-sm-12">
								<div class="text-center">
                                   <div class="form-group">
                                        <textarea class="form-control" placeholder="Message Details ..." required="" rows="7" name="message"></textarea>

										<br>

										 <div class="col-xs-12 col-sm-6 cen">
                                    
											<div class="capbox ">


											<div class="capbox-inner">
											</br>
											<input type="hidden" id="txtCaptcha">
											<input type="text" class="captcha" name="CaptchaInput" id="CaptchaInput" placeholder="Enter Code"><br>
											</div>
											<div id="CaptchaDiv"></div>

											</div>
											
                                        </div>

										 <div class="col-xs-12 col-sm-6 cen">
                                            <button class="btn btn-primary" onclick="ValidCaptcha()" name="submit">Submit</button>
											<button class="btn btn-primary" onclick="myFunction()">Reset</button>
											</div>



                                    </div>

								</div>

								</div>


								</div>
                            </div>
                            <!-- end row -->
                           
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
	<script type="text/javascript">
	

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>	


</body>
</html>
