//Table of random numbers
$(document).ready(function(){
	for(i=0; i<48; i++){
		var rand = Math.floor( Math.random() * 10 );
		document.getElementById(i).innerHTML = rand;
	}
});

//Authentication
var j = 0;
function login(){
var 
	// var passwd = document.getElementById("userInput").value;
	passwd = $("p#0").html();
	passwd += $("p#5").html();
	passwd += $("p#10").html();
	passwd += $("p#15").html();
	passwd += $("p#28").html();
	passwd += $("p#25").html();
	passwd += $("p#22").html();
	passwd += $("p#32").html();
	var inpasswd = $(":text").val();
	if(passwd==inpasswd){
		location.href="somepage.php?w1=" + inpasswd + "";
	}else if(j==0){
		$("#info").html("<div class='alert alert-danger' role='alert' style='margin-bottom: 0.3rem;'><i class='fas fa-exclamation'></i> The password is incorrect.</div>");
	    j++;
	}

	else{
		$("#info").html("<div class='alert alert-danger' role='alert'><i class='fas fa-exclamation'></i> The password is incorrect.<br><b>The correct password has been highlighted above</b>. Please enter it in the password field.<br><small>*You must enter the correct password to proceed.</small></div>");
		$("p#0").css('background-color','#FFBCBC');
	    $("p#5").css('background-color','#FFBCBC');
	    $("p#10").css('background-color','#FFBCBC');
	    $("p#15").css('background-color','#FFBCBC');
	    $("p#28").css('background-color','#FFBCBC');
	    $("p#25").css('background-color','#FFBCBC');
	    $("p#22").css('background-color','#FFBCBC');
	    $("p#32").css('background-color','#FFBCBC');
	    j++;
	}
};
