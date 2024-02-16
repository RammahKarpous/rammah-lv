import Highway from '@dogstudio/highway';
// import HomeRenderer from './renderers/HomeRenderer';
import Fade from './transitions/Fade';
import ToArticle from './transitions/contextual/ToArticle';
import ArticleRenderer from './renderers/ArticleRenderer';

const H = new Highway.Core({
    transitions: {
        default: Fade,
        contextual: {
            article: ToArticle
          }
    },
    renderers: {
        article: ArticleRenderer
    }
});