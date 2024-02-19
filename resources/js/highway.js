import Highway from '@dogstudio/highway';
// import HomeRenderer from './renderers/HomeRenderer';
import Fade from './transitions/Fade';
import ToArticle from './transitions/contextual/ToArticle';
import ArticleRenderer from './renderers/ArticleRenderer';
import HomeRenderer from './renderers/HomeRenderer';
import ArticlesRenderer from './renderers/ArticlesRenderer';
import LinksRenderer from './renderers/LinksRenderer';

const H = new Highway.Core({
    transitions: {
        default: Fade,
        contextual: {
            article: ToArticle
          }
    },
    renderers: {
        article: ArticleRenderer,
        home: HomeRenderer,
        articles: ArticlesRenderer,
        links: LinksRenderer
    }
});