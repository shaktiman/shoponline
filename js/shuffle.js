// JavaScript Document

jQuery(function($){
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

});