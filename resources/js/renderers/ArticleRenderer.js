import Highway from '@dogstudio/highway';
import highlight from '../actions/highlight';
// import activeLinkIndicator from '../actions/activeLinkIndicator';

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