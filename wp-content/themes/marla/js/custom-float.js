jQuery(document).ready(function($){ 
	
$('#nav-below').hide();


 var $container = $('.todocontenido');

    $container.masonry({
    itemSelector : '.todocontenido > div',
    columnWidth: 350,
	gutter: 10,
	hiddenStyle: { opacity: 0, transform: 'scale(0.1)  translateZ(0px) translateY(0px) rotateX(0deg)',  },
	visibleStyle: { opacity: 1, transform: 'scale(1)  translateZ(400px) translateY(300px) rotateX(-90deg)' },
	isFitWidth: true
 
    });
    

    $container.infinitescroll({
       navSelector  : "#nav-below",           
    nextSelector : ".nav-previous a",                      
    itemSelector : ".todocontenido > div:not(.anuncioshome)",
		loadingText  : "Cargando más...",                     
	loadingImg   : "loading.gif", 
	 donetext     : "Eso es todo amigos :)"	
	 	 
      },     
      function( newElements ) {
		  
		  $('.todocontenido > div').hover(
	function () {
    $('.todocontenido > div').not(this).addClass('focus-post');
  },
  function () {
    $('.todocontenido > div').not(this).removeClass('focus-post');
  }
	);
 
    var $newElems = $( newElements );
    $container.masonry( 'appended', $newElems );


	  
       
		
});    
  
    
    


});