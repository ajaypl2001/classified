////////////////////////////////////////////////////////////////////////////
// city_state.js ///////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

/* var countries = Object();

countries['Africa'] = 'Algeria|Angola|Benin|Botswana|Burkina Faso|Burundi|Cameroon|Cape Verde|Central African Republic|Chad|Comoros|Congo, Dem.|Congo, Rep.|Djibouti|Egypt|Equatorial Guinea|Eritrea|Ethiopia|Gabon|Gambia|Ghana|Guinea|Guinea-Bissau|Kenya|Lesotho|Liberia|Libya|Madagascar|Malawi|Mali|Mauritania|Mauritius|Morocco|Mozambique|Namibia|Niger|Nigeria|Rwanda|Sao Tome/Principe|Senegal|Seychelles|Sierra Leone|Somalia|South Africa|Sudan|Swaziland|Tanzania|Togo|Tunisia|Uganda|Zambia|Zimbabwe';
countries['Antarctica'] = 'Amundsen-Scott';
countries['Asia'] = 'Bangladesh|Bhutan|Brunei|Burma (Myanmar)|Cambodia|China|East Timor|India|Indonesia|Japan|Kazakhstan|Korea (north)|Korea (south)|Laos|Malaysia|Maldives|Mongolia|Nepal|Philippines|Russian Federation|Singapore|Sri Lanka|Taiwan|Thailand|Vietnam';
countries['Australia/Oceania'] = 'Australia|Fiji|Kiribati|Micronesia|Nauru|New Zealand|Palau|Papua New Guinea|Samoa|Tonga|Tuvalu|Vanuatu';
countries['Caribbean'] = 'Anguilla|Antigua/Barbuda|Aruba|Bahamas|Barbados|Cozumel|Cuba|Dominica|Dominican Republic|Grenada|Guadeloupe|Haiti|Jamaica|Martinique|Montserrat|Netherlands Antilles|Puerto Rico|St. Barts|St. Kitts/Nevis|St. Lucia|St. Martin/Sint Maarten|St Vincent/Grenadines|San Andres|Trinidad/Tobago|Turks/Caicos';
countries['Central America'] = 'Belize|Costa Rica|El Salvador|Guatemala|Honduras|Nicaragua|Panama';
countries['Europe'] = 'Albania|Andorra|Austria|Belarus|Belgium|Bosnia-Herzegovina|Bulgaria|Croatia|Czech Republic|Denmark|Estonia|Finland|France|Georgia|Germany|Greece|Hungary|Iceland|Ireland|Italy|Latvia|Liechtenstein|Lithuania|Luxembourg|Macedonia|Malta|Moldova|Monaco|Netherlands|Norway|Poland|Portugal|Romania|San Marino|Serbia/Montenegro (Yugoslavia)|Slovakia|Slovenia|Spain|Sweden|Switzerland|Ukraine|United Kingdom|Vatican City';
countries['Islands'] = 'Arctic Ocean|Atlantic Ocean (North)|Atlantic Ocean (South)|Assorted|Caribbean Sea|Greek Isles|Indian Ocean|Mediterranean Sea|Oceania|Pacific Ocean (North)|Pacific Ocean (South)';
countries['Middle East'] = 'Afghanistan|Armenia|Azerbaijan|Bahrain|Cyprus|Iran|Iraq|Israel|Jordan|Kuwait|Kyrgyzstan|Lebanon|Oman|Pakistan|Qatar|Saudi Arabia|Syria|Tajikistan|Turkey|Turkmenistan|United Arab Emirates|Uzbekistan|Yemen';
countries['North America'] = 'Bermuda|Canada|Greenland|Mexico|United States';
countries['South America'] = 'Argentina|Bolivia|Brazil|Chile|Colombia|Ecuador|Guyana|Paraguay|Peru|Suriname|Uruguay|Venezuela'; */

////////////////////////////////////////////////////////////////////////////

var city_states = Object();

////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Selected
city_states['Australia'] = 'Canberra|Australian Capital Territory|New South Wales|Northern Territory|Queensland|South Australia|Tasmania|Victoria|Western Australia';
city_states['Canada'] = 'Ottawa|Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland and Labrador|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon Territory';
city_states['Ethiopia'] = 'Adama|Addis Ababa|Dese|Dire Dawa|Diredawa|Gondar|Mekele|Other';
city_states['Germany'] = 'Berlin|Baden-Wuerttemberg|Bayern|Berlin|Brandenburg|Bremen|Hamburg|Hessen|Mecklenburg-Vorpommern|Niedersachsen|Nordrhein-Westfalen|Rheinland-Pfalz|Saarland|Sachsen|Sachsen-Anhalt|Schleswig-Holstein|Thueringen';
city_states['Norway'] = 'Oslo|Akershus|Aust-Agder|Buskerud|Finnmark|Hedmark|Hordaland|More og Romsdal|Nordland|Nord-Trondelag|Oppland|Ostfold|Rogaland|Sogn og Fjordane|Sor-Trondelag|Telemark|Troms|Vest-Agder|Vestfold';
city_states['Sweden'] = 'Stockholm|Blekinge|Dalarnas|Gavleborgs|Gotlands|Hallands|Jamtlands|Jonkopings|Kalmar|Kronobergs|Norrbottens|Orebro|Ostergotlands|Skane|Sodermanlands|Uppsala|Varmlands|Vasterbottens|Vasternorrlands|Vastmanlands|Vastra Gotalands';
city_states['United Arab Emirates'] = 'Abu Dhabi|Abu Zaby (Abu Dhabi)|\'Ajman|Al Fujayrah|Ash Shariqah (Sharjah)|Dubayy (Dubai)|Ra\'s al Khaymah|Umm al Qaywayn';

city_states['United Kingdom'] = 'Barking/Dagenham|Barnet|Barnsley|Bath/North East Somerset|Bedfordshire|Bexley|Birmingham|Blackburn with Darwen|Blackpool|Bolton|Bournemouth|Bracknell Forest|Bradford|Brent|Brighton/Hove|City of Bristol|Bromley|Buckinghamshire|Bury|Calderdale|Cambridgeshire|Camden|Cheshire|Cornwall|Coventry|Croydon|Cumbria|Darlington|Derby|Derbyshire|Devon|Doncaster|Dorset|Dudley|Durham|Ealing|East Riding of Yorkshire|East Sussex|Enfield|Essex|Gateshead|Gloucestershire|Greenwich|Hackney|Halton|Hammersmith/Fulham|Hampshire|Haringey|Harrow|Hartlepool|Havering|Herefordshire|Hertfordshire|Hillingdon|Hounslow|Isle of Wight|Islington|Kensington/Chelsea|Kent|City of Kingston upon Hull|Kingston upon Thames|Kirklees|Knowsley|Lambeth|Lancashire|Leeds|Leicester|Leicestershire|Lewisham|Lincolnshire|Liverpool|City of London|Luton|Manchester|Medway|Merton|Middlesbrough|Milton Keynes|Newcastle upon Tyne|Newham|Norfolk|Northamptonshire|North East Lincolnshire|North Lincolnshire|North Somerset|North Tyneside|Northumberl/|North Yorkshire|Nottingham|Nottinghamshire|Oldham|Oxfordshire|Peterborough|Plymouth|Poole|Portsmouth|Reading|Redbridge|Redcar/Clevel/|Richmond upon Thames|Rochdale|Rotherham|Rutl/|Salford|Shropshire|S/well|Sefton|Sheffield|Slough|Solihull|Somerset|Southampton|Southend-on-Sea|South Gloucestershire|South Tyneside|Southwark|Staffordshire|St. Helens|Stockport|Stockton-on-Tees|Stoke-on-Trent|Suffolk|Sunderl/|Surrey|Sutton|Swindon|Tameside|Telford/Wrekin|Thurrock|Torbay|Tower Hamlets|Trafford|Wakefield|Walsall|Waltham Forest|W/sworth|Warrington|Warwickshire|West Berkshire|Westminster|West Sussex|Wigan|Wiltshire|Windsor/Maidenhead|Wirral|Wokingham|Wolverhampton|Worcestershire|York|Antrim|County Antrim|Ards|Armagh|County Armagh|Ballymena|Ballymoney|Banbridge|Belfast|Carrickfergus|Castlereagh|Coleraine|Cookstown|Craigavon|Down|County Down|Dungannon|Fermanagh|County Fermanagh|Larne|Limavady|Lisburn|County Londonderry|Derry|Magherafelt|Moyle|Newry/Mourne|Newtownabbey|North Down|Omagh|Strabane|County Tyrone|Aberdeen City|Aberdeenshire|Angus|Argyll/Bute|The Scottish Borders|Clackmannanshire|Dumfries/Galloway|Dundee City|East Ayrshire|East Dunbartonshire|East Lothian|East Renfrewshire|City of Edinburgh|Falkirk|Fife|Glasgow City|Highland|Inverclyde|Midlothian|Moray|North Ayrshire|North Lanarkshire|Orkney Islands|Perth/Kinross|Renfrewshire|Shetland Islands|South Ayrshire|South Lanarkshire|Stirling|West Dunbartonshire|Eilean Siar (Western Isles)|West Lothian|Isle of Anglesey|Blaenau Gwent|Bridgend|Caerphilly|Cardiff|Ceredigion|Carmarthenshire|Conwy|Denbighshire|Flintshire|Gwynedd|Merthyr Tydfil|Monmouthshire|Neath Port Talbot|Newport|Pembrokeshire|Powys|Rhondda Cynon Taff|Swansea|Torfaen|The Vale of Glamorgan|Wrexham';

city_states['United States'] = 'Washington DC|Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|Georgia|Kentucky|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusets|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming';

////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

function setRegions()
{
	for (region in countries)
		document.write('<option value="' + region + '">' + region + '</option>');
}
function setCountry()
{
	for (country in city_states)
		document.write('<option value="' + country + '">' + country + '</option>');
}
function setCountryList()
{
	for (country in city_states)
		document.write('<div class="checkbox"><label><input onclick="SelectState(' + country + ')" type="checkbox" value="' + country + '">' + country + '</label></div>');	
}
function setCountryList_adslist()
{

	for (country in city_states)
		document.write('<div class="checkbox"><label><input class="country_data" id="country_'+country+'" onclick="Getstateads_list(this.value)"  type="checkbox" name ="country" value="' + country + '">' + country + '</label><span class="para_p" id="state_'+country+'" style="margin-left: 7px ! important;"></span></div>');	
}
function set_city_country_state(oCountrySel, oCity_StateSel)
{ 
	var city_stateArr;
	oCity_StateSel.length = 0;
	var country = oCountrySel.input[oCountrySel.selectedIndex].text;
	

	if (city_states[country])
	{
		oCity_StateSel.disabled = false;
		oCity_StateSel.span[0] = new span;
		city_stateArr = city_states[country].split('|');
		for (var i = 0; i < city_stateArr.length; i++)
			oCity_StateSel.span[i+1] = new span(city_stateArr[i],city_stateArr[i]);
		//document.getElementById('txtplacename').innerHTML = country;
	}
	else {
		oCity_StateSel.disabled = true;
		
	}
}       

function set_city_state(oCountrySel, oCity_StateSel)
{ 
	$('#other').html(' ');
	var city_stateArr;
	oCity_StateSel.length = 0;
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;

	if (city_states[country])
	{
		
		oCity_StateSel.disabled = false;
		oCity_StateSel.options[0] = new Option('Select State*','');
		city_stateArr = city_states[country].split('|');
		for (var i = 0; i < city_stateArr.length; i++)
			oCity_StateSel.options[i+1] = new Option(city_stateArr[i],city_stateArr[i]);
		//document.getElementById('txtplacename').innerHTML = country;
	}
	else {
		oCity_StateSel.disabled = true;
		
	}
}
function set_state(oCountrySel, oCity_StateSel)
{
	var city_stateArr;
	oCity_StateSel.length = 0;
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;

	if (city_states[country])
	{
			console.log('kjasdk');
			console.log(oCountrySel);
			console.log(oCity_StateSel);
		jQuery("td.add_state").css({"display":"block"});
		/*$("td.add_city .add_city_label").css({"display":"block"});*/
		//$("td.add_state select#city_state").css({"display":"block"});
		jQuery("td.add_city_manually").css({"display":"none"});
		jQuery("#city_state1").val('');
		jQuery("#city_state1").closest('td').css('display','none');
		oCity_StateSel.disabled = false;
		oCity_StateSel.options[0] = new Option('Select your state','');
		city_stateArr = city_states[country].split('|');
		for (var i = 0; i < city_stateArr.length; i++)
			oCity_StateSel.options[i+1] = new Option(city_stateArr[i],city_stateArr[i]);
			//document.getElementById('txtplacename').innerHTML = country;
	}
	else {
		
		oCity_StateSel.disabled = true;
		jQuery("td.add_city_manually").css({"display":"block"});
		jQuery("#city_state1").closest('td').css('display','block');
		jQuery("td.add_state").css({"display":"none"});
		jQuery("#state").val('');
	}
}
function state_city_profile() {
	if(jQuery("td.add_state select#city_state").val() == "Other") {
		jQuery("td.add_city_manually").css({"display":"block"});
		jQuery("#state").val('');
		jQuery("td.add_state").css({"display":"none"});
		jQuery("#city_state1").closest('td').css('display','block');
		/*jQuery("td.add_state").before({"display":"none"});*/
	}
}
function state_city() {
	if(jQuery("select#city_state").val() == "Other") 
	{
		jQuery("div#other").addClass("form-group  input-group");
		$('<input/>').attr({ type: 'text', class:'form-control forminput', name:'city_state1', id:'city_state1',  placeholder:'State*' }).appendTo('#other');
		$('<span />').attr({ class:'input-group-addon state' , id:'basic-addon2' }).html('<i class="fa fa-globe" aria-hidden="true"></i>').appendTo('#other');
		$("<label>").attr({for:'city_state1', id:'city_state1-error', class:'error'}).appendTo('#other');;
		jQuery("input#city_state1").css({"display":"block"});
		jquery("input#city_state1").attr('type', 'text');
		
	}
	else 
	{	
		jQuery("div#other").removeClass("form-group  input-group");
		jQuery("input#city_state1").remove();
		jQuery("span.state").remove();
		jQuery("label#city_state1-error").remove();	
	}
}
function print_city_state(oCountrySel, oCity_StateSel)
{
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;
	var city_state = oCity_StateSel.options[oCity_StateSel.selectedIndex].text;
	if (city_state && city_states[country].indexOf(city_state) != -1)
		document.getElementById('txtplacename').innerHTML = city_state + ', ' + country;
	else document.getElementById('txtplacename').innerHTML = country;
}
function set_state_1(oCountrySel, oCity_StateSel,Selstate)
{
	var city_stateArr;
	oCity_StateSel.length = 0;
	var country = oCountrySel;	

	if (city_states[country])
	{
		jQuery("td.add_state").css({"display":"block"});
		
		jQuery("td.add_city_manually").css({"display":"none"});
		jQuery("#city_state1").val('');
		jQuery("#city_state1").closest('td').css('display','none');
		oCity_StateSel.disabled = false;
		oCity_StateSel.options[0] = new Option('Select your state','');
		city_stateArr = city_states[country].split('|');
		for (var i = 0; i < city_stateArr.length; i++)
		{			
			oCity_StateSel.options[i+1] = new Option(city_stateArr[i],city_stateArr[i]);
			if(oCity_StateSel.options[i+1].text == Selstate.trim())
			{
				oCity_StateSel.options[i+1].selected = true;
			} 
		}
			
	}
	else {
		
		oCity_StateSel.disabled = true;
		jQuery("td.add_city_manually").css({"display":"block"});
		jQuery("#city_state1").closest('td').css('display','block');
		jQuery("td.add_state").css({"display":"none"});
		jQuery("#state").val('');
	}
}


function set_country(oRegionSel, oCountrySel, oCity_StateSel)
{
	var countryArr;
	oCountrySel.length = 0;
	oCity_StateSel.length = 0;
	var region = oRegionSel.options[oRegionSel.selectedIndex].text;
	if (countries[region])
	{
		oCountrySel.disabled = false;
		oCity_StateSel.disabled = true;
		oCountrySel.options[0] = new Option('Select Country','');
		countryArr = countries[region].split('|');
		for (var i = 0; i < countryArr.length; i++)
			oCountrySel.options[i + 1] = new Option(countryArr[i], countryArr[i]);
		document.getElementById('txtregion').innerHTML = region;
		document.getElementById('txtplacename').innerHTML = "";
	}
	else oCountrySel.disabled = true;
}
function get_country_state(){

	var city_stateArr;
		var city_stateArr1=[];
		
	for (country in city_states)
	{
		var val  = country;
		
		if (city_states[val])
		{
			city_stateArr1 += city_states[val];
		}
	}
	city_stateArr = city_stateArr1.split('|');
//console.log(city_stateArr);
	 return city_stateArr;
}
function Getstateads_list(val,page_num){
 if ($('#country_'+val).is(":checked"))
	{
	$('.para_p').html('');
		var stateArr;
		var datavar='';
		var country=val;
		stateArr = city_states[val].split('|');
		for (var i = 0; i < stateArr.length; i++)
			{
				datavar  += '<div class="subcate"><label><input   class="country_sate"  id="country_sate" onclick="Getcountry_sate_list(this.value)" name="country_state" type="checkbox" value="' + stateArr[i] + '">' + stateArr[i] + '</label><input type="hidden" name="country_id" value="' + country + '" id="country_id"></div>';
			}	
		$('#state_'+val).html(datavar);
	}else{
		//alert(val);
		$('#state_'+val).html('');
	}

		//for pagignation search by country

			page_num = page_num?page_num:0;
			var cateID = $("input[name='CateName']:checked").val();
			var subcateID = [];
		  	$.each($("input[name='scate[]']:checked"), function(){
			subcateID. push($(this). val());
			});
		  	//alert(subcateID);
			//var url = '<?php echo  echo base_url().'adslisting/ajaxPaginationDatabycountry/'+page_num;?>';
		    $.ajax({
				type: 'POST',
				url: ajax_url+'adslisting/ajaxPaginationDatas/'+page_num,
				data:'page='+page_num+'&countryID='+val+'&cateID='+cateID+'&sbcateid='+subcateID,
				beforeSend: function () {
					$('.loading').show();
				},
				success: function (html) {
					$('#postList').html(html);
					
				}
		});
	
}
function Getcountry_sate_list(val,page_num){
	var cateID = $("input[name='CateName']:checked").val();
			var subcateID = [];
		  	$.each($("input[name='scate[]']:checked"), function(){
			subcateID. push($(this). val());
			});
	page_num = page_num?page_num:0;
	var country = $('#country_id').val();

			$.ajax({
				type: 'POST',
				url: ajax_url+'adslisting/ajaxPaginationDatas/'+page_num,
				data:'page='+page_num+'&stateID='+val+'&countryID='+country+'&cateID='+cateID+'&sbcateid='+subcateID,
				beforeSend: function () {
					$('.loading').show();
				},
				success: function (html) {
					$('#postList').html(html);
					
				}
		});
	
}