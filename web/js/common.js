$(document).ready(function() {
	$("a[rel='m_PageScroll2id']").mPageScroll2id();
	$(".aboutquest h2").animated("fadeIn","fadeIn");
	$(".far").animated("fadeInRight","fadeInRight");
	$(".fal").animated("fadeInLeft","fadeInLeft");
	$(".fac").animated("fadeIn","fadeIn");
	$(".rating").css( "min-height", $(window).height() );
	$(".profile").css( "min-height", $(window).height() );
	$(".quest").css( "min-height", $(window).height()) ;
	$(".c-hamburger").click(function(){
		$(".topmenu").fadeToggle(600);
	});
	$("a[rel='m_PageScroll2id']").mPageScroll2id({
    offset:50
	});
	$(".quest h1").animated("fadeIn","fadeIn");
	$(".righted").animated("fadeInLeft","fadeInLeft");
	$(".lefted").animated("fadeInRight","fadeInRight");
	$(".margined").click(function(){
		$(".game").fadeIn();
	});

	(function() {

  "use strict";

  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
	$('.open-popup-link').magnificPopup({
  	type:'inline',
  	midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
	$( ".check_button" ).click(function( event ) {
 	 	
		var a1 = $('input[name="q1"]').val();
		if (a1==3){
			$(".que1").fadeOut("slow");
			$(".que2").delay(00).fadeIn("slow");
		}else{
		
		}
  		event.preventDefault();

		var a2 = $('input[name="q2"]').val();
		if (a2==5){
			$(".que2").fadeOut("slow");
			$(".check_button").fadeOut("slow");
			$(".que3").delay(00).fadeIn("slow");
			$(".final_answ").fadeIn("slow");
		}
  		event.preventDefault();


	});
	/* $(window).scroll(function(){
     var scValue = $("body").scrollTop();
     if ( scValue > 200 ) $(".aboutquest").animate({'opacity':'1'},1500);

        });
	/*
	$(".moreinfo").mouseover(function(){
		$(".moreinfo").css('background-color','black');
		$(".moreinfo").css('color','white');
	});
	$(".moreinfo").mouseout(function(){
		$(".moreinfo").css('background-color','white');
		$(".moreinfo").css('color','black');
	});
	$(".moreinfo").click(function(){
		$(".aboutquest").slideDown("slow", function(){


		});
		$('body,html').animate({scrollTop: 500}, 1000);
	});

	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	})); */
});