$('a').smoothScroll();

// openModal();

// setInterval(function openModal() {
// 	document.getElementById("modalBtn").click();
// }, 50000);

function openModal() {
	document.getElementById("modalBtn").click();
}

$(window).scroll(function() {
	var scroll = $(window).scrollTop();
  	$(".location-map ul li img").css({
    	width: (100 + scroll/5) +"%"
  	})
})


document.getElementById("mobile-header-icon").addEventListener("click", function() {
	document.getElementById("mobile-menu").classList.toggle("mobile-menu-active");
	document.getElementById("mobile-header-icon").classList.toggle("mobile-header-icon-close");
});




