import Highway from '@dogstudio/highway';
import highlight from '../vendor/highlight';
import animateNavigation from '../components/animateNavigation';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class ArticleRenderer extends Highway.Renderer {
    onEnter() { [
    ] }
    onLeave() { [

    ] }
    onEnterCompleted() { [
        // activeLinkIndicator(),
        highlight(),
        animateNavigation()
    ] }
    onLeaveCompleted() { [

    ] }
}

export default ArticleRenderer;