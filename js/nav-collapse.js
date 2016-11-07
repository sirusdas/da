
   /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
    
        $(window).scroll(function(){
                   // alert("hello");
                    var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
                    var windowHeight = $(window).height(); // get the height of the window
                    var docHeight = $(document).height();
                    //alert(windowPos);
                    for (var i=0; i < aArray.length; i++) {
                        var theID = aArray[i];
                      var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                        var divHeight = $(theID).height(); // get the height of the div in question
                       var headPos=$("#header").offset().top;                 
     
                     //alert(windowPos+">= "+divPos+"&&"+windowPos+"<("+divPos+"+"+divHeight+")");
                     
                   /*  if(divPos<=60){
                          $("a[href='" + theID + "']").addClass("nav-active");
                          alert(theID);
                     }*/
                     
                     //if (theID=="#header" && windowPos < (divPos + divHeight)) {
                         if(windowPos <60 ){
                             if(theID=="#header"){
                                $("a[href='" + theID + "']").addClass("nav-active");
                            //alert(theID);
                        }
                     }else{

                      if (windowPos >= divPos-100 && windowPos < (divPos + divHeight - 100)) {
                            $("a[href='" + theID + "']").addClass("nav-active");
                            //var cal= divPos + divHeight;
                           // alert("windowPos="+windowPos+" divPos+divHieght="+cal);
                      } else {
                          
                          //alert(theID);
                            $("a[href='" + theID + "']").removeClass("nav-active");   
                        }
                      }
                  

                    if(windowPos + windowHeight == docHeight) {
                        //alert(theID);
                      if (!$("nav li:last-child a").hasClass("nav-active")) {
                          var navActiveCurrent = $(".nav-active").attr("href");
                          $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                            $("nav li:last-child a").addClass("nav-active");
                       //alert(theID);
                    }
                  }
              
          }
                });
          

