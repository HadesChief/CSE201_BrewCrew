
//function search();
//function comment();

const functions = {
    add: (num1, num2) => num1 + num2
}

/*function search() {
	var search = getElementById(#).value();
	var company = getElementById(#).value();
	var type = getElementById(#).value();
	
	a=$.ajax({
		url:"http://ceclnx01.csi.miamioh.edu",
		method: "GET"
	}).done(function(data) {
		$("#results").html("")
		len = data.beers.length;
		for(i = 0; i < len; i++) {
			$("#results").append(<li> + data.beer[i].name + " " + data.beer[i].brand + " " + data.beer[i].type);
		}
	}).fail(function(error) { 
		console.log("error", error.statusText);
	});
}

function comment() {
	var comment = getElementById(#).value;
	var n = getElementById(#);
	a=$.ajax({
		url:"http://ceclnx01.csi.miamioh.edu",
		method: "POST"
	}).done(function(data) {
		for( var i = 0; i < data.length; i++) {
			if(data.beer[i].name == n) {
				data.beer[i].comment = comment;
			}
		}
	}).fail(function(error) { 
		console.log("error", error.statusText);
	});
}
*/ 

module.exports = functions; 