$(document).ready(function(){   
    $(window).on('load',function(){
    setTimeout(function(){ $('.preloader-holder').hide(); }, 1000);        
      });
});
$('.carousel').carousel({
    interval: 5000
})
$('.carousel').carousel('cycle');


$("a").click(function(){
  
    var pageId = $(this).attr("data-page");
    $("html, body").animate({ scrollTop: $("#"+pageId).offset().top }, 1000);
  });



  