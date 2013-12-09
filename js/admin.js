// JavaScript Document

jQuery(function($){
	$("#addproduct").submit(function(event){
		var data = $(this).serialize();
		console.log(data);
		$.ajax({
			data:data,			
			url:'admin.php?req=1',
			success:function(data){
				$('#smsg').html(data);
				$('#smsg').show();
			}
		})
		//console.log("Form Submited with "+data);
		event.preventDefault();
	});
})