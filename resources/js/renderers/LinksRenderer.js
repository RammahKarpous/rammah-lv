import Highway from '@dogstudio/highway';
import animateNavigation from '../components/animateNavigation';
// import activeLinkIndicator from '../components/activeLinkIndicator';

class LinksRenderer extends Highway.Renderer {
    onEnter() { [
        
    ] }
    onLeave() { [
    ] }
    onEnterCompleted() { [
        // activeLinkIndicator(),
        animateNavigation()
    ] }
    onLeaveCompleted() { [
        
    ] }
}

export default LinksRenderer;