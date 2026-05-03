function initExperienceScroll() {
    const video = document.querySelector(".video-background");
    const container = document.querySelector("#container");

    if (!video || !container) return;
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;

    gsap.registerPlugin(ScrollTrigger);

    const timeline = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            start: "top top",
            end: "bottom bottom",
            scrub: true,
        },
    });

    function setupVideoScroll() {
        timeline.to(video, {
            currentTime: video.duration,
            ease: "none",
        });

        ScrollTrigger.refresh();
    }

    if (video.readyState >= 1) {
        setupVideoScroll();
    } else {
        video.addEventListener("loadedmetadata", setupVideoScroll, { once: true });
    }
}