import Highway from '@dogstudio/highway';
import gsap from 'gsap'

class Fade extends Highway.Transition {
	out({ from, done }) {
		const tl = gsap.timeline()

		tl.fromTo(from, { opacity: 1 }, {
			opacity: 0, duration: .2, onComplete: function () {
				done()
			}
		})
	}

	in({ from, to, done }) {
		from.remove()
		window.scrollTo(0, 0);
		
		const tl = gsap.timeline()
		
		tl.fromTo(to, { opacity: 0 }, {
			opacity: 1, duration: .2, onComplete: function () {
				done()
			}
		})
	}
}

export default Fade;