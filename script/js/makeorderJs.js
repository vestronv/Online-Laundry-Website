function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
	var filling = document.getElementById('Formalpants').value;
	var trouser = document.getElementById('Trousers').value;
	var jackets = document.getElementById('Jackets').value;
	var coats = document.getElementById('Coats').value;
	var sweaters = document.getElementById('Sweaters').value;
	var pullovers = document.getElementById('Pullovers').value;
	var tie = document.getElementById('Tie').value;
	var hat = document.getElementById('Hat').value;
	var windbreaker = document.getElementById('Windbreaker').value;
	var wintercoat = document.getElementById('WinterCoat').value;
	var punjabisuit = document.getElementById('PunjabiSuit').value;
	var jeans = document.getElementById('Jeans').value;
	var capries = document.getElementById('Capries').value;
	var shirts = document.getElementById('Shirts').value;
	var socks = document.getElementById('Socks').value;
	var innerwear = document.getElementById('InnerWear').value;
	var underwear = document.getElementById('Underwear').value;
	var appron = document.getElementById('Appron').value;
	var kurta = document.getElementById('Kurta').value;
	var tshirts = document.getElementById('TShirts').value;
	var pants = document.getElementById('Pants').value;
	var sari = document.getElementById('Sari').value;
	var blouse = document.getElementById('Blouse').value;
	var skirt = document.getElementById('Skirt').value;
	var slacks = document.getElementById('Slacks').value;
	var ladiescoat = document.getElementById('LadiesCoat').value;
	var ladiesjackets = document.getElementById('LadiesJackets').value;
	var ladiessweater = document.getElementById('LadiesSweater').value;
	var ladiespullover = document.getElementById('LadiesPullover').value;
	var ladiestie = document.getElementById('LadiesTie').value;
	var ladieshat = document.getElementById('LadiesHat').value;
	var scarf = document.getElementById('Scarf').value;
	var shawl = document.getElementById('Shawl').value;
	var salwarsuit = document.getElementById('SalwarSuit').value;
	var dress = document.getElementById('Dress').value;
	var ladieswindbreaker = document.getElementById('LadiesWindbreaker').value;
	var ladieswintercoat = document.getElementById('LadiesWinterCoat').value;
	var ladiesjeans = document.getElementById('LadiesJeans').value;
	var ladiescaprie = document.getElementById('LadiesCaprie').value;
	var ladiesshirts = document.getElementById('LadiesShirts').value;
	var ladiestshirts = document.getElementById('LadiesTShirts').value;
	var bedsheet = document.getElementById('Bedsheet').value;
	var pillowcover = document.getElementById('PillowCover').value;
	var towel = document.getElementById('Towel').value;
	var curtain = document.getElementById('Curtain').value;
	var tablecloth = document.getElementById('TableCloth').value;
	var comforter = document.getElementById('Comforter').value;
	var quilt = document.getElementById('Quilt').value;
	var blanket = document.getElementById('Blanket').value;
	var cushioncover = document.getElementById('CushionCover').value;
	var matressp = document.getElementById('MattressProtector').value;
	var sofacovr = document.getElementById('Sofacover').value;
	
    var cakePrice =  parseFloat(filling) * (10.00) + parseFloat(trouser) * (10.00) + parseFloat(jackets) * (80.00)
     + parseFloat(coats) * (80.00) + parseFloat(sweaters) * (70.00) + parseFloat(pullovers) * (70.00)
     + parseFloat(tie) * (10.00)  + parseFloat(appron) * (20.00) + parseFloat(kurta) * (15.00) + parseFloat(hat) * (10.00) 
     + parseFloat(windbreaker) * (10.00) + parseFloat(wintercoat) * (100.00) + parseFloat(punjabisuit) * (20.00) 
     + parseFloat(jeans) * (10.00) + parseFloat(capries) * (10.00) + parseFloat(shirts) * (10.00)  
     + parseFloat(socks) * (8.00) + parseFloat(innerwear) * (9.00) + parseFloat(underwear) * (9.00) 
     + parseFloat(tshirts) * (10.00)
 + parseFloat(pants) * (10.00) + parseFloat(sari) * (80.00) + parseFloat(blouse) * (7.00) + parseFloat(skirt) * (10.00) 
 + parseFloat(slacks) * (10.00) + parseFloat(ladiescoat) * (80.00) + parseFloat(ladiesjackets) * (80.00) 
 + parseFloat(ladiessweater) * (70.00) + parseFloat(ladiespullover) * (70.00) + parseFloat(ladiestie) * (10.00) 
 + parseFloat(ladieshat) * (10.00) + parseFloat(scarf) * (7.00) + parseFloat(shawl) * (7.00) 
 + parseFloat(salwarsuit) * (40.00) + parseFloat(dress) * (40.00) + parseFloat(ladieswindbreaker) * (10.00) 
 + parseFloat(ladieswintercoat) * (80.00) + parseFloat(ladiesjeans) * (10.00) + parseFloat(ladiescaprie) * (10.00) 
 + parseFloat(ladiesshirts) * (10.00) + parseFloat(ladiestshirts) * (10.00)
 + parseFloat(bedsheet) * (50.00) + parseFloat(pillowcover) * (7.00) + parseFloat(towel) * (10.00) 
 + parseFloat(curtain) * (15.00) + parseFloat(tablecloth) * (10.00) + parseFloat(comforter) * (30.00) 
 + parseFloat(quilt) * (30.00) + parseFloat(blanket) * (200.00) + parseFloat(cushioncover) * (7.00) 
 + parseFloat(matressp) * (35.00) + parseFloat(sofacovr) * (150.00);
    

    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = '<h4 class="totalAmountText"><u><font color=#07ea3c>' + "Total Bill Amount: Rs "+cakePrice+
    ' /-</font></u></h4>';
	return cakePrice;
}
function findtotal(){
 	
	var tot = calculateTotal();
	if(tot<50){
		alert ("Please select More items, Total Amount must be More than Rs. 50/-");
		return false;
	}
}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
