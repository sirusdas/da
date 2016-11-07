/**
 * Compiled by Sirus Das
 */
//scroll to change the header

$(document).ready(function(){
	$(window).scroll(function (event) {
		var w = $(window).scrollTop();	
		var abt = $("#about-us").offset().top;
		var mag = $("#magazine").offset().top;
		var ct  = $("#contact").offset().top;
		
        if( w >= abt-80 && w < mag-80){
        	$(".navbar").css("background", "lightgreen");
           clearInterval(abt);
        }
        else{
        	if(w >= mag-80 && w < ct-80){
        		$(".navbar").css("background", "lightblue");
        	}
        	else{
        		if(w >= ct-80){
        			$(".navbar").css("background", "white");
        		}
        		else{
        			$(".navbar").css("background", "white");
        		}
        	}
        }
    });
});
