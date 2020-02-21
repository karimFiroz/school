$(document).ready(function(){
	
	$('#clints').liScroll();
});
$(document).ready(function(){
	
$('.carousel').carousel({
  interval: 2000
})
});


$(document).ready(function(){
$('.date').datepicker();
});


$('.amadertab').tabs();
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})


 $(document).ready(function() {
   var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
			    })


$('table tr').each(function(i){
if(i < 5){
if(i % 2 == 0){
abc(this).addClass('even');
}else{
abc(this).addClass('odd');
}
}
});