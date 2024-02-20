import Highway from '@dogstudio/highway';
import swiper from '../vendor/swiper';
import photoswipe from '../vendor/photoswipe';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class HomeRenderer extends Highway.Renderer {
    onEnter() { [

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