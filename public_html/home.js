function checkSize() {
 	if($(window).width() <= 755) {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about the bachelor programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about the pre-master's programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about the master's programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about the post-master's programs";
		$('#footerlinks').hide();
	    $('#footermenu').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='5px';
	} else if ($(window).width() <= 1000) {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about<br>the bachelor<br>programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about<br>the pre-master's<br>programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about<br>the master's<br>programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about<br>the post-master's<br>programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	} else if ($(window).width() <= 1450) {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about<br>the bachelor programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about<br>the pre-master's programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about<br>the master's programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about<br>the post-master's programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	} else {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about the bachelor programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about the pre-master's programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about the master's programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about the post-master's programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	}
}

window.onresize = function(event) {
	checkSize();
}
