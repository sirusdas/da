/**
 * Compiled by Sirus Das
 * EC-Blocks
 */
$(document).ready(function(){
  //$("sh").hide(); 
  $(this).click(function(event){
    $(event.target).next("sh").slideToggle();
   if ($(event.target).html() == '+') {
        $(event.target).html("-");
    }
     else{
          if ($(event.target).html() == '-') {
             $(event.target).html("+");
          }
      }
   });
});

/*
* Code for Ajax Contact request
* Remember not to use json
*/
$(document).ready(function(){
	//$(".loader1").show();$(".loader2").show();$(".loader3").show();
	$("#idForm").submit(function() {
		//$(".loader1").show();$(".loader2").show();$(".loader3").show();
    	$.ajax({
    		  type: "POST",
    		  data: $("#idForm").serializeArray(),
    		  url: $("#idForm").attr('action'),
    		  success: function(data) {
    				  //$(".loader3").hide();$(".loader2").hide();$(".loader1").hide();
    		         $("#msg").html("<h5>"+data+"</h5>");
    		         //$("#msg").delay(4000).fadeOut();
    		  }
    		});
    	return false;
    });
});

/*
 * Accordion
 */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
