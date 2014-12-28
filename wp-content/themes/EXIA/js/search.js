jQuery(function($) {

	$( "#search" ).click(function() {

		if (typeof type != "undefined" || typeof sexe != "undefined" || age != "" ) {

			var type = $('input[type=radio][name=type]:checked').val();
			var sexe = $('input[type=radio][name=sexe]:checked').val();
			var age = $('input[type=text][name=age]').val();

			if (typeof type != "undefined" && typeof sexe === "undefined" && age == "" ) {
		  		document.location = "./?s=" + type ;
		  	} 
		  	else if (typeof type === "undefined" &&  sexe === "undefined" && age != "" ) {
		  		document.location = "./?s=" + age ;
		  	}
		  	else if (typeof type === "undefined" && typeof sexe != "undefined" && age == "" ) {
		  		document.location = "./?s=" + sexe ;
		  	}
		  	else if (typeof type != "undefined" && typeof sexe === "undefined" &&  age != "") {
		  		document.location = "./?s=" + type + "+" + age ;
		  	} 
		  	else if (typeof type === "undefined" && typeof sexe != "undefined" && age != "") {
		  		document.location = "./?s=" + sexe + "+" + age ;
		  	} 
		  	else if (typeof type != "undefined" && typeof sexe != "undefined" && age == "") {
		  		document.location = "./?s=" + type + "+" + sexe ;
		  	} 
		  	else {
		  		document.location = "./?s=" + type + "+" + sexe + "+" + age ;
		  	}

		  }
	});

});