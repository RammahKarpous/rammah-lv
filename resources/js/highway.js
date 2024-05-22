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

function cursorHoverEffect() {
    gsap.to(cursorCircle, {
        duration: .3,
        background: "#255FD0",
        width: 12,
        height: 12,
    });
}

function cursorLeaveEffect() {
    gsap.to(cursorCircle, {
        duration: .3,
        background: "#fff",
        width: 8,
        height: 8,
    });
}

// Let cursor circle follow the cursor with gsap
window.addEventListener('mousemove', (e) => {
    const location = e;
    const allElements = document.querySelectorAll("#hamburger-menu, a")

    gsap.to(cursorCircle, {
        x: location.clientX - 11,
        y: location.clientY - 11,
    });

    allElements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            cursorHoverEffect();
        });
    
        element.addEventListener('mouseleave', () => {
            cursorLeaveEffect();
        });
    })
});