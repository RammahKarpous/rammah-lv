import Highway from '@dogstudio/highway';
import gsap from 'gsap'

class Fade extends Highway.Transition {
	out({ done }) {
		const tl = gsap.timeline()

        const articles = document.querySelectorAll('.article');

        tl.to(articles, { opacity: 0, y: 20, duration: .3, stagger: 0, onComplete: function () { done() } }, 0)
	}

	in({ from, done }) {
		from.remove()
		window.scrollTo(0, 0);
		
		const tl = gsap.timeline()
		
        const headerImage = document.querySelector('#header-img');
		const title = document.querySelector('#article-title');
        const description = document.querySelector('#article-description');
        const article = document.querySelector('#article-content');

        tl
            .from(headerImage, { opacity: 0, duration: .5 })
            .from(title, { opacity: 0, y: 20, duration: .5, ease: 'power2.inOut' }, "-=.3")
            .from([article, description], { opacity: 0, y: 20, duration: .5, ease: 'power2.inOut', onComplete: function () { done() } }, "-=.45")
	}
}

export default Fade;