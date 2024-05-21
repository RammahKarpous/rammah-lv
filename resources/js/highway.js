import Highway from '@dogstudio/highway';
// import HomeRenderer from './renderers/HomeRenderer';
import Fade from './transitions/Fade';
import ToArticle from './transitions/contextual/ToArticle';
import ArticleRenderer from './renderers/ArticleRenderer';
import HomeRenderer from './renderers/HomeRenderer';
import ArticlesRenderer from './renderers/ArticlesRenderer';
import LinksRenderer from './renderers/LinksRenderer';
import gsap from 'gsap';

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

const cursorCircle = document.querySelector('.cursor-circle');

// Let cursor circle follow the cursor with gsap
window.addEventListener('mousemove', (e) => {
    const location = e;

    gsap.to(cursorCircle, {
        x: location.clientX - 20,
        y: location.clientY - 20,
    });
});