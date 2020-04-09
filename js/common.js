
// Отправка заявки 
$(document).ready(function() {
	
	$('#form_sort').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		
		
		$.ajax({
			type: "POST",
			url: "mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			
		});
		
	});
});
