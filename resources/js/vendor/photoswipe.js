import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

export default function photoswipe() {
    const designsGallery = document.querySelector('#designs-gallery');

    const lightbox = new PhotoSwipeLightbox({
        gallery: designsGallery,
        children: 'a',
        showHideAnimationType: 'zoom',
        pswpModule: () => import('photoswipe')
      });

      lightbox.init();
}