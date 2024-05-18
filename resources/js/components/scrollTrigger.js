import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default function scrollTrigger() {

    gsap.registerPlugin(ScrollTrigger)

    gsap.from('#technologies', {
        scrollTrigger: '#technologies', y: 20, opacity: 0
    })
}