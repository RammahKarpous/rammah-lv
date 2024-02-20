// Importing Swiper
import Swiper from 'swiper';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Import Swiper modules
import { Navigation, Pagination } from 'swiper/modules';

export default function swiper() {
    const companies = document.querySelector('#companies');
    const logos = document.querySelectorAll('#companies .swiper-pagination img');

    console.log(logos);

    const swiper = new Swiper(companies, {
        modules: [Navigation, Pagination],
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '#companies .swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return `
                    <span class="${className}">
                        <img src="${logos[index].currentSrc}">
                    </span>`;
            }
        }
    })
}
