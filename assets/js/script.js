//==========HEADER==============
; (function () {
	let burger = document.querySelector('.header__burger');
	let menu = document.querySelector('.header__menu');

	burger.addEventListener('click', function () {
		menu.classList.toggle('active');
		this.classList.toggle('open');
	})
})();

//==========sliderWorks=================


const swiperWorks = new Swiper('.slider-works__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	speed: 800,
	loop: true,
	navigation: {
		nextEl: '.slider-works__next',
		prevEl: '.slider-works__prev',
	},
	breakpoints: {
		// when window width is >= 320px
		676: {
			slidesPerView: 2,
		},
		// when window width is >= 480px
		1100: {
			slidesPerView: 3,
		},
	}
});


const swiperBenefits = new Swiper('.benefits__slider-swiper', {
	slidesPerView: 1,
	speed: 800,
	loop: true,
	navigation: {
		nextEl: '.benefits__slider-next',
		prevEl: '.benefits__slider-prev',
	},
});




