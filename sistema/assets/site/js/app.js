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
	
	// select
	$("#pages-sistema .page-societario .box-fitler fieldset select").change(function(){
		var text = $(this).val();
		
		$(this).siblings('input').val(text);
	});
	
	// sanfona
	$("#pages-sistema .page-societario .box-type h3, #pages-sistema .page-pessoal .box-type h3").click(function(){
		if ($(this).parents('.box-type').hasClass('active')) {
			$(this).parents('.box-type').removeClass('active');
		} else {
			$(this).parents('.box-type').addClass('active');
		}
	});
});