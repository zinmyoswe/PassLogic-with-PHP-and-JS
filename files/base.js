
$(function(){
	// focus -------------------------------------------------//
	if ($('#password').length > 0) {
		// For iOS8 iPhone/iPad mobile safari
		if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0 ){
			/* Do not Focus to not popup iOS's Software Keyboard. User should use PassLogic's Software Keyboard. */
		}else{
			$("#password").focus();
		}
	} else 	if ($('#otp').length > 0) {
		$("#otp").focus();
	} else if ($('#uid').length > 0) {
		$("#uid").focus();
	}

	// passlogic_matrix -------------------------------------------------//
	$("#passlogic_matrix").find("td").addClass("passlogic_matrix_cell");


	// softkey -------------------------------------------------//
	var startevent, moveevent, endevent;
	var handler;

	var isTouch = ('ontouchstart' in window);

	if(isTouch) {
		startevent = "touchstart";
		moveevent = "touchmove";
		endevent = "touchend";
	} else {
		startevent = "mousedown";
		moveevent = "mousemove";
		endevent = "mouseup";
	}

	if (document.getElementById('password')) {
		var passbox = $("#password");
	} else if (document.getElementById('pass')) {
		var passbox = $("#pass");
	} else if (document.getElementById('pl_pos')) {
		var passbox = $("#pl_pos");
	}

	// 1-10
	handler = function() {
		var digit = $(this).html().replace( / /ig , "");

		var nowdigit = $("#password").val();
		$("#password").val(nowdigit+digit);

		$(this).css("border", "3px solid #F90");
	};
	$("#softkey").find("[class='keyboardNumInner']").bind(startevent, handler);

	// del
	handler = function() {
		var nowPass = passbox.val();
		var newPass = nowPass.substring(0, nowPass.length-1);

		$("#password").val(newPass);

		$(this).css("border", "3px solid #F90");
	};
	$("#softkey").find("[class='delBoxInner']").bind(startevent, handler);

	// moveevent, endevent
	handler = function() {
		$(this).css("border", "1px solid #999");
	};

	$("#softkey").find("[class='keyboardNumInner']").bind(moveevent, handler);
	$("#softkey").find("[class='keyboardNumInner']").bind(endevent, handler);
	$("#softkey").find("[class='delBoxInner']").bind(moveevent, handler);
	$("#softkey").find("[class='delBoxInner']").bind(endevent, handler);

	// unselectable
	$("#softkey").find("[class='keyboardNumInner']").attr("unselectable", "on");
	$("#softkey").find("[class='delBoxInner']").attr("unselectable", "on");

	//massagebox
	$('#messagebox').fadeIn(1000).delay(1000).fadeOut(2000);
});
