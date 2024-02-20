import gsap from "gsap";

export default function activeLinkIndicator() {
    const activeLinkIndicator = document.querySelector('#active-link-indicator');
    const navLinks = document.querySelectorAll('#navigation ul a');

    let links = {};

    navLinks.forEach(link => {
        const offset = link.offsetLeft;
        const href = link.getAttribute('href').split('/')[1];

        const width = link.offsetWidth;

        links[href] = offset + (width / 2);
    });

    const path = window.location.pathname;
    const firstSegment = path.split('/')[1];

    if ( Object.keys(links).includes(firstSegment) ) {
        
        // Set the initial position of the active link indicator
        activeLinkIndicator.style.left = `${links[firstSegment]}px`;

        gsap.fromTo(activeLinkIndicator, 
            { left: localStorage.getItem('currentIndicatorPosition') }, 
            { left: links[firstSegment], duration: .3, ease: 'power2.inOut' });

        localStorage.setItem('currentIndicatorPosition', links[firstSegment])
    }

}