$(document).ready(function(){
	AOS.init({
		duration:100,
	});
	
	setTimeout(function(){
		$('.loader-wrapper').fadeToggle();
	
	}, 650);

	$('#delete').mouseover(function(){
		alert("Teste");
	});
		
});


$(document).ready(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			$('.fa-chevron-up').css({
				"opacity":"1","pointer-events":"auto"
			});
		}else{
			$('.fa-chevron-up').css({
				"opacity":"0","pointer-events":"auto"
			});
		}
	});

	$('.fa-chevron-up').click(function(){
		$('html').animate({scrollTop:0},1500);
	});
});


// ad navbar

$(document).ready(function(){
	$(".navbar-toggle").click(function(){
			$(".menu").toggleClass("menu-open");
	})
});


