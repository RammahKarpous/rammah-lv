import gsap from "gsap";

export default function animateProjects() {
    function isTouchDevice() {
        return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    }

    function moveElement(element, amount, container, e) {
        const { left, top, width, height } = container.getBoundingClientRect();

        const x = ((e.clientX - left) / width - 0.5) * amount;
        const y = ((e.clientY - top) / height - 0.5) * amount;

        gsap.to(element, {
            x: x,
            y: y,
            ease: "power2.out",
            duration: 0.5
        });
    }

    function returnElement(element) {
        gsap.to(element, {
            x: 0,
            y: 0,
            ease: "power2.out",
            duration: 0.5
        });
    }

    if (!isTouchDevice()) {
        const projects = document.querySelectorAll(".home-page-project");

        projects.forEach(project => {
            const mockup = project.querySelector("img");
            const rightContent = project.querySelector("#right-content");

            project.addEventListener("mousemove", (e) => {
                moveElement(mockup, 100, project, e);
                moveElement(rightContent, 50, project, e);
            });

            project.addEventListener("mouseleave", () => {
                
                returnElement(mockup);
                returnElement(rightContent);
            });
        });
    }
}