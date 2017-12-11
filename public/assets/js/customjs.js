$(document).ready(function() {	
	
	$("#msg_form").submit(function(evt){
		evt.preventDefault();
		
		
		//alert('low');
		var url = $('form#msg_form').attr('action');
		
		var formData = new FormData($('#msg_form')[0]);
		
		var message_bodi = $("#message_body").code();
		
		//alert(message_bodi);
		
		
		formData.append('message_body_content' ,message_bodi );
		
		
		//FormData
		$("#summernote").code();
		$.ajax({
			url: url,
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			beforeSend : function()
			   {
				//$("#preview").fadeOut();
				$('form#msg_form').find("#preview").html('<p style="color:red;"> <span class="fa fa-refresh fa-spin" > </span> </p>').fadeIn();
			   },
			   success: function(data)
				  {
						if(data=='0')
						{
						 // invalid file format.
						 $('form#msg_form').find("#preview").html('<p class=""> <span class="fa fa-times-circle-o" > </span> Message Not sent </p>').fadeIn();
						}
						else
						{
						 // view uploaded file.
						 $('form#msg_form').find("#preview").html('<p style="color:red;"><span class="fa fa-check-circle-o" > </span>'+ data + '</p>').fadeIn();
						
						 $("#msg_form")[0].reset(); 
						}
				  },
				 error: function(e) 
				  {
						$('form#msg_form').find("#preview").html(e).fadeIn();
				  }
		}); // End: $.ajax()           

	}); 
	//return false ;

	$("#msg_quick").submit(function(evt){
		evt.preventDefault();
		
		
		//alert('low');
		var url = $('form#msg_form').attr('action');
		
		var formData = new FormData($('#msg_form')[0]);
		
		var message_bodi = $("#message_body").code();
		
		alert(message_bodi);
		
		
		formData.append('message_body_content' ,message_bodi );
		
		
		FormData
		$("#summernote").code();
		$.ajax({
			url: url,
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			beforeSend : function()
			   {
				//$("#preview").fadeOut();
				$('form#msg_form').find("#preview").html('<p style="color:red;"> <span class="fa fa-refresh fa-spin" > </span> </p>').fadeIn();
			   },
			   success: function(data)
				  {
						if(data=='0')
						{
						 // invalid file format.
						 $('form#msg_form').find("#preview").html('<p class=""> <span class="fa fa-times-circle-o" > </span> Message Not sent </p>').fadeIn();
						}
						else
						{
						 // view uploaded file.
						 $('form#msg_form').find("#preview").html('<p style="color:red;"><span class="fa fa-check-circle-o" > </span>'+ data + '</p>').fadeIn();
						
						 $("#msg_form")[0].reset(); 
						}
				  },
				 error: function(e) 
				  {
						$('form#msg_form').find("#preview").html(data).fadeIn();
				  }
		}); // End: $.ajax()           

	}); 
	//return false ;

	
	
	
	
	
	
});

