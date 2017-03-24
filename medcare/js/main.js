$(document).ready(function() {


	$(".fancybox").fancybox();



	$("nav ul").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
	});

//Кнопка наверх, если нужно
/*
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
*/	
	$("#form1").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("#form1").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
		});
		return false;
	});



	$("#form2").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("#form2").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 300);
		});
		return false;
	});

});