import anime from "animejs";

export default function animatePageHeading () {
    // Wrap every letter in a span
    let headingParts = document.querySelectorAll('.page-heading');

    headingParts.forEach(textWrapper => {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    })
    
    anime.timeline({ loop: false })
        .add({
            targets: '.page-heading .letter',
            translateY: [100, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 4000,
            delay: (el, i) => 300 + 30 * i
        });
}