$(document).ready(function(){

$('#arrow').click(function(){

$('#arrow_close').css("display","block"); 
$('#side').animate({width:300},300);
$('.post_info').animate({opacity:0},300);
$('#arrow').animate({opacity:0},300);
$('.header_desc').animate({opacity:0},300);

$('#arrow_close').animate({opacity:1},300); 
window.setTimeout(function(){
$('#side_cat').css("display","block");
$('#side_title').css("display","block");
$('#side_logo img').css("display","block");
$('.side_content').css("display","block");

},300);

});

$('#arrow_close').click(function(){
$('#side').animate({width:30},300); 
$('#header').animate({marginLeft:20},300);
$('#header').animate({opacity:1},300); 
$('.post_info').animate({opacity:1},300); 
$('.header_desc').animate({opacity:1},300);

$('#arrow_close').animate({opacity:0},300);     
$('#arrow').animate({opacity:1},300);

$('#side_cat').css("display","none");
$('#side_title').css("display","none");
$('#arrow_close').css("display","none"); 
$('#side_logo img').css("display","none");
$('.side_content').css("display","none");

    
    });


});