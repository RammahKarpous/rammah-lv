import Highway from '@dogstudio/highway';
import swiper from '../vendor/swiper';
import photoswipe from '../vendor/photoswipe';
import animatePageHeading from '../components/animatePageHeading';
import animateTechnologies from '../animation/home/animateTechnologies';
import animateNavigation from '../components/animateNavigation';

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
        animateNavigation()
    ] }
    onLeaveCompleted() { [
        
    ] }
}

export default HomeRenderer;