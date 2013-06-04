

window.onload = function() {
	var mySwiper = new Swiper('.swiper-container',{
		//Your options here:
		mode:'vertical',
		loop: true,
		autoplay:5000,
		delay: 500,
	});  

	mySwiper.startAutoPlay();

}





$(function(){
	var mySwiper = $('.swiper-container').swiper({
		//Your options here:
		mode:'horizontal',
		loop: true
		//etc..
	});
})

