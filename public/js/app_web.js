$( document ).ready(function() {
		$('#click').click(function(){
		  if ( $( "#nav:first" ).is( ":hidden" )){
		  		$(this).css('background-image','url(img/close.png)');
		    $( "#nav" ).slideToggle( "hidden" );		    
		  } else {
		  		$( "#nav" ).slideToggle('slow');
		    $(this).css('background-image','url(img/menu.png)');
		  }
  });
});