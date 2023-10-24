import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
// import "swiper/css/navigation";
// import "swiper/css/pagination";
const productSliderThumbs = new Swiper(".product-swiper-thumbs", {
	direction: "vertical",
	loop: true,
	slidesPerView: 3,
});
const productSlider = new Swiper(".product-swiper-main", {
	modules: [Navigation, Pagination],
	// Optional parameters
	direction: "horizontal",
	loop: true,

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: productSliderThumbs,
	},
});
