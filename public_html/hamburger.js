function checkSize() {
 	if($(window).width() <= 750) {
		$('#more').hide();
	    $('#menuopen').show();
	} else {
		$('#menuopen').hide();
		$('#more').show();
	}
}

window.onresize = function(event) {
	checkSize();
}

function slideOut() {
	  document.getElementById("slidermenu").id='slidermenulong';
	  document.getElementsByTagName("body")[0].id='dark';
	  setTimeout(doThings, 250);
}

function removeButtons() {
	var elements = document.getElementsByClassName("menubtn")
	for(i=0; i<elements.length; i++) {
    elements[i].style.visibility =    'hidden';
	}
	setTimeout(slideIn, 250);
}

function doThings() {
	var elements = document.getElementsByClassName("menubtn");
	for(i=0; i<elements.length; i++) {
    elements[i].style.visibility =    'visible';
	elements[i].style.color = "#000000";
	elements[i].style.background = "#f9f9f9";
	}
}

function doMoreThings() {
	var elements = document.getElementsByClassName("menubtn");
	for(i=0; i<elements.length; i++) {
	elements[i].style.color = "#023F88";
	elements[i].style.background = "#023F88";
	}
	setTimeout(removeButtons, 250);
}

function slideIn() {
	  document.getElementById("slidermenulong").id='slidermenu';
	  document.getElementById("dark").id='light';
}
