$(document).ready(function(){

$('#arrow').toggle(slide_out,slide_in);

function slide_out(){
$('#arrow_close').css("visibility","visible"); 
$('#side').animate({width:300},300);
$('.post_info').animate({opacity:0},300);
$('.header_desc').animate({opacity:0},300);

window.setTimeout(function(){
$('.side_content').css("visibility","visible","clear","both");
},300);

};

function slide_in(){
$('#side').animate({'width':'3%'},300); 
$('#header').animate({marginLeft:20},300);
$('#header').animate({opacity:1},300); 
$('.post_info').animate({opacity:1},300); 
$('.header_desc').animate({opacity:1},300);

$('#arrow').animate({opacity:1},300);

$('.side_content').css("visibility","hidden");

    
    };

   $(document).keyup(function(e) {
      switch(e.keyCode) { 
         // User pressed "up" arrow
        case 37:
                 event.preventDefault();

        slide_in();
        break;
         // User pressed "down" arrow
         case 39:
                 event.preventDefault();

            slide_out();
         break;
         // User pressed "enter"
         case 27:
                 event.preventDefault();

            slide_in();
         break;
      }
   });

});


