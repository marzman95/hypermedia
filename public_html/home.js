function checkSize() {	
	if ($(window).width() <= 450) {
		document.getElementsByClassName("panel-heading")[4].innerHTML='<br><br><h3>Bachelor<br><br></h3><br><br><br>';
		document.getElementsByClassName("panel-heading")[5].innerHTML="<br><br><h3>Pre-master</h3><br><br><br>";
		document.getElementsByClassName("panel-heading")[6].innerHTML="<br><br><h3>Master<br><br></h3><br><br><br>";
		document.getElementsByClassName("panel-heading")[7].innerHTML="<br><br><h3>Post-master</h3><br><br><br>";
		document.getElementsByClassName("panel-heading")[4].style.color='black';
		document.getElementsByClassName("panel-heading")[5].style.color="black";
		document.getElementsByClassName("panel-heading")[6].style.color="black";
		document.getElementsByClassName("panel-heading")[7].style.color="black";
		document.getElementsByClassName("panel-footer")[4].style.display="none";
		document.getElementsByClassName("panel-footer")[5].style.display="none";
		document.getElementsByClassName("panel-footer")[6].style.display="none";
		document.getElementsByClassName("panel-footer")[7].style.display="none";
		$('#footerlinks').hide();
	    $('#footermenu').show();
	    $('#mainblocks').hide();
		$('#mainblocksmobile').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='5px';
	} else if($(window).width() <= 550) {
		document.getElementsByClassName("panel-heading")[4].innerHTML='Bachelor';
		document.getElementsByClassName("panel-heading")[5].innerHTML="Pre-master";
		document.getElementsByClassName("panel-heading")[6].innerHTML="Master";
		document.getElementsByClassName("panel-heading")[7].innerHTML="Post-master";
		document.getElementsByClassName("panel-footer")[4].style.display="block";
		document.getElementsByClassName("panel-footer")[5].style.display="block";
		document.getElementsByClassName("panel-footer")[6].style.display="block";
		document.getElementsByClassName("panel-footer")[7].style.display="block";
		document.getElementsByClassName("panel-heading")[4].style.color='black';
		document.getElementsByClassName("panel-heading")[5].style.color="black";
		document.getElementsByClassName("panel-heading")[6].style.color="black";
		document.getElementsByClassName("panel-heading")[7].style.color="black";
		document.getElementsByClassName("panel-footer")[4].innerHTML='Learn more about<br>the bachelor<br>programs';
		document.getElementsByClassName("panel-footer")[5].innerHTML="Learn more about<br>the pre-master's<br>programs";
		document.getElementsByClassName("panel-footer")[6].innerHTML="Learn more about<br>the master's<br>programs";
		document.getElementsByClassName("panel-footer")[7].innerHTML="Learn more about<br>the post-master's<br>programs";
		$('#footerlinks').hide();
	    $('#footermenu').show();
	    $('#mainblocks').hide();
		$('#mainblocksmobile').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='5px';
 	} else if($(window).width() <= 755) {
		document.getElementsByClassName("panel-heading")[4].innerHTML='Bachelor';
		document.getElementsByClassName("panel-heading")[5].innerHTML="Pre-master";
		document.getElementsByClassName("panel-heading")[6].innerHTML="Master";
		document.getElementsByClassName("panel-heading")[7].innerHTML="Post-master";
		document.getElementsByClassName("panel-footer")[4].style.display="block";
		document.getElementsByClassName("panel-footer")[5].style.display="block";
		document.getElementsByClassName("panel-footer")[6].style.display="block";
		document.getElementsByClassName("panel-footer")[7].style.display="block";
		document.getElementsByClassName("panel-heading")[4].style.color='black';
		document.getElementsByClassName("panel-heading")[5].style.color="black";
		document.getElementsByClassName("panel-heading")[6].style.color="black";
		document.getElementsByClassName("panel-heading")[7].style.color="black";
		document.getElementsByClassName("panel-footer")[4].innerHTML='Learn more about the<br>bachelor programs';
		document.getElementsByClassName("panel-footer")[5].innerHTML="Learn more about the<br>pre-master's programs";
		document.getElementsByClassName("panel-footer")[6].innerHTML="Learn more about the<br>master's programs";
		document.getElementsByClassName("panel-footer")[7].innerHTML="Learn more about the<br>post-master's programs";
		$('#footerlinks').hide();
	    $('#footermenu').show();
	    $('#mainblocks').hide();
		$('#mainblocksmobile').show();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='5px';
	} else if ($(window).width() <= 1000) {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about<br>the bachelor<br>programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about<br>the pre-master's<br>programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about<br>the master's<br>programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about<br>the post-master's<br>programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    $('#mainblocks').show();
		$('#mainblocksmobile').hide();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	} else if ($(window).width() <= 1450) {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about<br>the bachelor programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about<br>the pre-master's programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about<br>the master's programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about<br>the post-master's programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    $('#mainblocks').show();
		$('#mainblocksmobile').hide();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	} else {
		document.getElementsByClassName("panel-footer")[0].innerHTML='Learn more about the bachelor programs';
		document.getElementsByClassName("panel-footer")[1].innerHTML="Learn more about the pre-master's programs";
		document.getElementsByClassName("panel-footer")[2].innerHTML="Learn more about the master's programs";
		document.getElementsByClassName("panel-footer")[3].innerHTML="Learn more about the post-master's programs";
		$('#footermenu').hide();
		$('#footerlinks').show();
	    $('#mainblocks').show();
		$('#mainblocksmobile').hide();
	    document.getElementsByClassName("panelbachelor")[0].style.marginTop='0px';
	}
}

window.onresize = function(event) {
	checkSize();
}
