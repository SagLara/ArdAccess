
// (function ($) {
    // "use strict";
jQuery(document).on('submit','#formlog',function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url:'controller_login.php',
		type:'POST',
		dataType:'json',
		data: $(this).serialize(),
		beforeSend: function(){
			//$('.entrar').val('Validando...');
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			location.href = 'menu.php';
		}else{
			location.href = 'error.php?mensaje=El usuario o contraseña son incorrectos';
		}			
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});		
				

    // /*==================================================================
    // [ Focus input ]*/
    // $('.input100').each(function(){
        // $(this).on('blur', function(){
            // if($(this).val().trim() != "") {
                // $(this).addClass('has-val');
            // }
            // else {
                // $(this).removeClass('has-val');
            // }
        // })    
    // })
  
  
    // /*==================================================================
    // [ Validate ]*/
    // var input = $('.validate-input .input100');

    // $('.validate-form').on('submit',function(){
        // var check = true;

        // for(var i=0; i<input.length; i++) {
            // if(validate(input[i]) == false){
                // showValidate(input[i]);
                // check=false;
            // }
        // }

        // return check;
    // });


    // $('.validate-form .input100').each(function(){
        // $(this).focus(function(){
           // hideValidate(this);
        // });
    // });

    // function validate (input) {
        // if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            // if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                // return false;
            // }
        // }
        // else {
            // if($(input).val().trim() == ''){
                // return false;
            // }
        // }
    // }

    // function showValidate(input) {
        // var thisAlert = $(input).parent();

        // $(thisAlert).addClass('alert-validate');
    // }

    // function hideValidate(input) {
        // var thisAlert = $(input).parent();

        // $(thisAlert).removeClass('alert-validate');
    // }
    
    // /*==================================================================
    // [ Show pass ]*/
    // var showPass = 0;
    // $('.btn-show-pass').on('click', function(){
        // if(showPass == 0) {
            // $(this).next('input').attr('type','text');
            // $(this).addClass('active');
            // showPass = 1;
        // }
        // else {
            // $(this).next('input').attr('type','password');
            // $(this).removeClass('active');
            // showPass = 0;
        // }
        
    // });


// })(jQuery);