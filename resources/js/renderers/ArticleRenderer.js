import Highway from '@dogstudio/highway';
import hljs from 'highlight.js';

import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import bash from 'highlight.js/lib/languages/bash';

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('php', php);
hljs.registerLanguage('bash', bash);

import 'highlight.js/styles/atom-one-dark.css';

class ArticleRenderer extends Highway.Renderer {
    onEnter() { [

    ] }
    onLeave() { [

    ] }
    onEnterCompleted() { [
        (function highlightjs() {
            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
        })()
    ] }
    onLeaveCompleted() { [

    ] }
}

export default ArticleRenderer;