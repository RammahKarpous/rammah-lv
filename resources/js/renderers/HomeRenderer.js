import Highway from '@dogstudio/highway';
import swiper from '../vendor/swiper';
import photoswipe from '../vendor/photoswipe';
import animatePageHeading from '../components/animatePageHeading';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class HomeRenderer extends Highway.Renderer {
    onEnter() { [
        animatePageHeading()
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