import Highway from '@dogstudio/highway';
import swiper from '../vendor/swiper';
import photoswipe from '../vendor/photoswipe';
import animatePageHeading from '../components/animatePageHeading';
import animateTechnologies from '../animation/home/animateTechnologies';

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
        photoswipe(),
    ] }
    onLeaveCompleted() { [
        
    ] }
}

export default HomeRenderer;