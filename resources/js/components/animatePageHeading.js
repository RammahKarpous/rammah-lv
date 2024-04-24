import gsap from "gsap";

export default function animatePageHeading () {
    // Selecting elements
    let headingParts = document.querySelectorAll('.page-heading');

    const me = document.querySelector('.me-image');
    const greeting = document.querySelector('.greeting-with-name');
    const aboutMe = document.querySelector('.about-me');

    // Defining GSAP timeline
    const tl = gsap.timeline();

    headingParts.forEach(textWrapper => {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    })
    
    tl
        .from('.page-heading .letter', {
            duration: 1, y: 100, opacity: 0, ease: 'power1.out', stagger: .04
        })
        .from(me, { duration: 1, opacity: 0, ease: "power4.out" }, "-=1")
        .from(greeting, { duration: .7, opacity: 0, y: 20 }, "-=.5")
        .from(aboutMe, { duration: 1, opacity: 0, y: 20 }, "-=.5");
}