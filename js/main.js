$(function () {
  $(document).scroll(function () {
	  var $nav = $(".navbar");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});

    var typed = new Typed(".typed", {
        strings: ["Web Developer", "Web Designer", "Frontend Developer."],
        typeSpeed: 80,
        loop: true,
        startDelay: 1000,
        showCursor: false
    });


////////
