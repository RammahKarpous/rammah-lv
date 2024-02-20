import Highway from '@dogstudio/highway';
import highlight from '../vendor/highlight';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class ArticleRenderer extends Highway.Renderer {
    onEnter() { [
    ] }
    onLeave() { [

    ] }
    onEnterCompleted() { [
        // activeLinkIndicator(),
        highlight(),
    ] }
    onLeaveCompleted() { [

    ] }
}

export default ArticleRenderer;