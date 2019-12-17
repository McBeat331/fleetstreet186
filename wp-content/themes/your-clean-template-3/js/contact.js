jQuery(document).ready(function($) {
	$("#enroll").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/your-clean-template-3/mail.php",
			data: str,
			success: function(msg) {
				//if(msg == 'OK') {
					$("#modal-1").modal('hide');
					$("#modal-3").modal('show');
				//}
				//else {result = msg;}
				
			}
		});
		return false;
	});
	
	$("#call").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/your-clean-template-3/mail.php",
			data: str,
			success: function(msg) {
				//if(msg == 'OK') {
					$("#modal-2").modal('hide');
					$("#modal-3").modal('show');
				//}
				//else {result = msg;}
				
			}
		});
		return false;
	});
});