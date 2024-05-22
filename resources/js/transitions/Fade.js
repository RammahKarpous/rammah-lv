import Highway from '@dogstudio/highway';
import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger';

class Fade extends Highway.Transition {
	out({ done }) {
		const tl = gsap.timeline()
		const fadeContent = document.querySelector('#fade-content');

		tl.fromTo(fadeContent, { opacity: 1 }, {
			opacity: 0, duration: .2, onComplete: function () {
				done()
			}
		})
	}

	in({ from, done }) {
		from.remove()
		window.scrollTo(0, 0);

		gsap.registerPlugin(ScrollTrigger);
		
		const tl = gsap.timeline()
		const fadeContent = document.querySelector('#fade-content');
		const body = document.querySelector('body');

		body.style.overflow = 'scroll';
		
		ScrollTrigger.refresh();

		tl
			.fromTo(fadeContent, { opacity: 0 }, {
			opacity: 1, duration: .2, onComplete: function () {
				done()
			}
		})
	}
}

export default Fade;