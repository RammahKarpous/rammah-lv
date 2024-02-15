import Highway from '@dogstudio/highway';
import gsap from 'gsap'

class Fade extends Highway.Transition {
	out({ done }) {
		const tl = gsap.timeline()

		const title = document.querySelector('#articles-title');
        const articles = document.querySelectorAll('.article');

        tl
            .to(title, { opacity: 0, duration: .5 })
            .to(articles, { opacity: 0, duration: .5, stagger: 0.1, onComplete: function () { done() } }, "-=.4")
	}

	in({ from, done }) {
		from.remove()
		window.scrollTo(0, 0);
		
		const tl = gsap.timeline()
		
        const headerImage = document.querySelector('#header-img');
		const title = document.querySelector('#article-title');
        const article = document.querySelector('#article-content');

        tl
            .from(headerImage, { opacity: 0, duration: .5 })
            .from(title, { opacity: 0, y: 20, duration: .7, ease: 'power2.inOut' }, "-=.3")
            .from(article, { opacity: 0, y: 20, duration: .7, ease: 'power2.inOut', onComplete: function () { done() } }, "-=.65")
	}
}

export default Fade;