import gsap from "gsap";

export default function animateNavigation() {
    const hamburgerMenu = document.querySelector('#hamburger-menu');
    const bars = hamburgerMenu.querySelectorAll(".bars");

    const fullScreenNavigation = document.querySelector('#full-screen-nav');
    const mainNavLinks = fullScreenNavigation.querySelectorAll("#main-nav li");
    const body = document.querySelector('body');
    const contacts = document.querySelector('#contacts');

    const nav = gsap.timeline({ reversed: true });
    const hm = gsap.timeline({ reversed: true })
 
    hm
        .to(bars[0], { duration: .2, rotate: '45deg', y: 10 }, 0)
        .to(bars[1], { duration: .2, opacity: 0 }, 0)
        .to(bars[2], { duration: .2, rotate: '-45deg', y: -10 }, 0)

    nav
        .to(body, { duration: 0, overflow: "hidden" })
        .to(fullScreenNavigation, { duration: 0,  width: "100%" })
        .to(fullScreenNavigation, { duration: 2, ease: "power4.inOut", opacity: 100  }, "-=.2")
        .from(mainNavLinks, { duration: .3, x: 50, opacity: 0, stagger: 0.05 }, "-=1.3")
        .from(contacts, { duration: .3, y: 20, opacity: 0 }, "-=1.1")

    hamburgerMenu.addEventListener("click", () => {
        nav.reversed() ? nav.play() : nav.reverse();
        hm.reversed() ? hm.play() : hm.reverse();
    });
}