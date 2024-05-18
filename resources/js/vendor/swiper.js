// Importing Swiper
import Swiper from 'swiper';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';

// Import Swiper modules
import { Pagination } from 'swiper/modules';

export default function swiper() {
    const companies = document.querySelector('#companies');
    const logos = document.querySelectorAll('#companies .swiper-pagination img');

    const swiper = new Swiper(companies, {
        modules: [Pagination],
        spaceBetween: 20,
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
