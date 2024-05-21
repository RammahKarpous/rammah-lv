import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default function animateTechnologies() {
    gsap.registerPlugin(ScrollTrigger)


    const technologies = document.querySelector('#technologies');
    const groups = technologies.querySelectorAll('.group')

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: technologies,
            markers: true,
            toggleActions: "play none none reverse"
        }
    });

    tl
        .addLabel("Fade container")
        .from(technologies, {
            scrollTrigger: '#technologies', y: 20, opacity: 0, delay: .3
        })
        .addLabel("Fade technologies")
        .from(groups, {
            opacity: 0, y: 20, stagger: .1
        }, "+=1")
}