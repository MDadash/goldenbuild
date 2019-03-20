(function(){
  $(document).ready(function(){
	    $(".btn-scroll").click(function (){
	        $('html, body').animate({ scrollTop: $(".main_page").offset().top},1000);
	    });


	    var clientHeight = $("body").height();
	    console.log(clientHeight);
		$(window).scroll(function(){
		   if ( $(window).scrollTop() >= clientHeight/2 ){              
		      $('.btn-scroll').css('display','block'); 
		   }
		   else {
		   		$('.btn-scroll').css('display','none');  
		   }
		})


  })
}());