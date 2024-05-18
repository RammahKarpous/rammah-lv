import Highway from '@dogstudio/highway';
import swiper from '../vendor/swiper';
import photoswipe from '../vendor/photoswipe';
import animatePageHeading from '../components/animatePageHeading';
import animateTechnologies from '../animation/home/animateTechnologies';
// import smoothScrollLenis from '../vendor/lenis';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class HomeRenderer extends Highway.Renderer {
    onEnter() { [
        animatePageHeading(),
        animateTechnologies(),
    ] }
    onLeave() { [
        
    ] }
    onEnterCompleted() { [
        // activeLinkIndicator(),
        swiper(),
        // smoothScrollLenis(),
        photoswipe(),
    ] }
    onLeaveCompleted() { [
        
    ] }
}

export default HomeRenderer;