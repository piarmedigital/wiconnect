$(document).ready(function(){

	$.validator.addMethod(
			"accept",
			function(value, element, param) {
	  return value.match(new RegExp("." + param + "$"));
	},
			"Please enter a valid data"
	);
	if($(window).width()<500){
		if($(".main_image").length>0){
			if($(".main_image").attr("data-mobileimage")){
				$(".main_image").attr("style","background:url('"+$(".main_image").attr("data-mobileimage")+"')no-repeat");
			}
		}
		if($(".standart_background_image").length>0){
			if($(".standart_background_image").attr("data-mobileimage")){
				$(".standart_background_image").attr("style","background:url('"+$(".standart_background_image").attr("data-mobileimage")+"')no-repeat");
			}
		}
		
		
	}
	$(".toggle_menu").click(function(){
		$(this).toggleClass("active");
		$(".in_header").toggleClass("active");
	});
	$(".parent_top span").click(function(){
		$(this).parent().toggleClass("active");
	});
	$(document).on("keyup","textarea,input",function(){
	   if($(this).val()!=""){
		   $(this).addClass("completed_data");
	   }else{
		   $(this).removeClass("completed_data");
	   }
   });
   $(document).on("blur","textarea,input,select",function(){
	   if($(this).val()!=""){
		   $(this).addClass("completed_data");
	   }else{
		   $(this).removeClass("completed_data");
	   }
   });
	if($(".slider_block").length>0){
		$(".slider_block").owlCarousel({loop:true,
				smartSpeed:1000,
				margin: 0,
				nav:true,navText: ['<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14L2 7.99997L8 1.99997" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>','<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 1.99997L8 7.99997L2 14" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
		items:1, });
	}
	if($(".left_phone_in_slider").length>0){
		var left_slider = $(".left_phone_in_slider").owlCarousel({loop:true,
		smartSpeed:1000,
				margin: 0,
				nav:true,navText: ['<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14L2 7.99997L8 1.99997" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>','<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 1.99997L8 7.99997L2 14" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
		items:1, });
		left_slider.on('changed.owl.carousel', function(e) {
			$(".yellow_white_item").removeClass("active");
			  $(".yellow_white_item").eq(e.page.index).addClass("active");
			});
			
		$(document).on('click', '.yellow_white_item', function(){
				n = $(this).index();
				 $('.left_phone_in_slider').trigger('to.owl.carousel', n);
		  });
	}
	$(document).on("click",".close_modal_in",function(){
		$.fancybox.close();
	});
	$(".fancybox").fancybox({
		padding: [40, 40, 40, 40]});
		
		
	$('#getdemo form,form#contactform,form#callback_form_product,#form_avail_product,#available_form').each(function(){
		if($( this ).attr("data-go")){
	$(this).validate({
			rules:{
				email:{
					email:true
				},
				first_name: {
					accept: "[a-zA-Z]+"
				},
			},
			ignore: '',
			submitHandler: function( form ){

			
				if( $( form ).valid() ){
					
					$.ajax({
						url: $( form ).attr("data-go"),
						method: 'post',
						data: $(form).serialize(),
						success: function(data){
							if($(form).closest(".modal_block").length>0){
								$(form).closest(".modal_block").html(data);
							
							}else{
								
								
								$("#answer_ajax").html(data);
								$.fancybox.open({
									  href: "#answer_ajax",
									 padding: [40, 40, 40, 40]
								});
							}
							
						}
					});
					
					
					
				}   
			},
			 errorPlacement: function (error, element) {

					var customError = $([
						'<div class="invalid-feedback">',
						'  <span class="error-box">',
						'    ',
						'  </span>',
						'</div>'
					].join(""));

					// Add `form-error-message` class to the error element
					error.addClass("form-error-message");

					// Insert it inside the span that has `mb-0` class
					error.appendTo(customError.find('.error-box'));

					// Insert your custom error
					customError.insertBefore(element);
				},focusInvalid: true,
				highlight: function (element, errorClass, validClass) {
					$(element).addClass('is-invalid');
					$(element).closest('.form_line').addClass("errored");
					$(element).closest('.form_line').find('.invalid-feedback').remove();
					$(element).closest('.invalid-feedback').remove();
				},
				unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
					$(element).closest('.form_line').removeClass("errored");
					$(element).closest('.form_line').find('.invalid-feedback').remove();
					$(element).closest('.invalid-feedback').remove();
				},
		} );
		}
		
	});	
		
});