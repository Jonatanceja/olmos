import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // Cuando el ancho de la ventana es igual o mayor a 640px (tamaño de tablet), se muestran 3 slides
      640: {
        slidesPerView: 4,
      },
      // Cuando el ancho de la ventana es menor a 640px (tamaño de móvil), se muestra solo 1 slide
      320: {
        slidesPerView: 1,
      },
    },
  });

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
  
