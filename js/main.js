// JavaScript Document
jQuery(function(){
	
	/* Shuffle Logic */
	
	// cache container
	var $container = $('#container');
	// initialize isotope
	
	$container.isotope({ filter: '*' });
	
	// filter items when filter link is clicked
	$('#mainMenu a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  
	  //Add active class to pills
	  $('#mainMenu').find("li").removeClass('active');
	  $(this).parent().addClass("active");
	  $('#container').find("div").removeClass('active');
	  return false;
	});
	
	/* Product Detials */
	
	var $container = $('#container');
	$(".element").on({		
		click:function(){
			$(this).addClass("active");
			var good = "prodid="+$(this).attr("id");
			$.ajax({
				url:'process.php',
				data:good,
				success:function(data){
					$("#productDetails").html(data);
					$("#container, #mainMenu").fadeOut();
					$("#productDetails").fadeIn();
					
					//$container.isotope({ filter: '.active' });
				}
			});
		}
	});
})