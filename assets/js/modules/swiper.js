// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Autoplay} from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


var  homeslider = new Swiper(".homeslider", {
	slidesPerView: 1,
	spaceBetween: 0,
	modules: [Navigation, Autoplay],
  autoplay: {
    delay: 3500, 
  },
  loop: true,
  speed:1000,
});


var  homeproduct = new Swiper(".homeproduct", {
	slidesPerView: 1,
	spaceBetween: 0,
	modules: [Autoplay],
  autoplay: {
    delay: 3500, 
  },
  loop: true,
  speed:1000,
});

