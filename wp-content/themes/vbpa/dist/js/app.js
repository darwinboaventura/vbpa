$(document).ready(function(){
	// menu mobile
	$("#main-header .row-middle .el-button-mobile-menu").click(function(){
		$("#mobile-menu").addClass('actived');
		
		return false;
	});
	
	$("#mobile-menu .el-close").click(function(){
		$("#mobile-menu").removeClass('actived');
		
		return false;
	});
	
	// smooth scroll
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});
	
	// value select
	$('[data-form-select]').change(function(){
		var text = $(this).children('option:selected').text();
		
		$(this).siblings('input').val(text);
	});
	
	// direcionar formulários para a categoria
	$('.form-test-1').submit(function(){
		var slug = $('.form-test-1 fieldset .el-select select').val();
		
		location.href = slug;
		
		return false;
	});
	
	$('.form-test-2').submit(function(){
		var slug = $('.form-test-2 fieldset .el-select select').val();
		
		location.href = slug;
		
		return false;
	});
	
	$('.form-test-3').submit(function(){
		var slug = $('.form-test-3 .el-select select').val();
		
		location.href = slug;
		
		return false;
	});
	
	$('.form-test-4').submit(function(){
		var slug = $('.form-test-4 .el-select select').val();
		
		location.href = slug;
		
		return false;
	});
});