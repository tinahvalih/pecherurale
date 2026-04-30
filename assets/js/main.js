document.addEventListener("DOMContentLoaded", () => {
    /* MENU */
    const menuButton = document.querySelector(".menu-button");

    if (menuButton) {
        menuButton.addEventListener("click", () => {
            document.body.classList.toggle("menu-open");
        });
    }

    /* INTRO VIDEO */
    const intro = document.getElementById("introVideo");
    const skipBtn = document.getElementById("skipIntro");
    const introIframe = document.getElementById("introPlayer");

    if (intro && skipBtn && introIframe && typeof Vimeo !== "undefined") {
        const introPlayer = new Vimeo.Player(introIframe);

        function endIntro() {
            intro.classList.add("is-hidden");

            introPlayer.pause().catch(() => { });

            setTimeout(() => {
                intro.style.display = "none";
            }, 800);
        }

        skipBtn.addEventListener("click", endIntro);

        introPlayer.on("ended", endIntro);
    }

    /* VIDEO MODAL */
    const modal = document.querySelector("#videoModal");
    const frame = document.querySelector("#videoFrame");
    const openButtons = document.querySelectorAll(".js-video-open");
    const closeButtons = document.querySelectorAll("[data-video-close]");

    let player = null;

    if (modal && frame && typeof Vimeo !== "undefined") {
        function openVideo(button) {
            if (modal.classList.contains("is-open")) return;

            const provider = button.dataset.videoProvider || "vimeo";
            const videoId = button.dataset.videoId;

            if (!videoId) return;

            if (provider === "vimeo") {
                frame.innerHTML = `
                    <iframe
                        id="vimeoPlayer"
                        src="https://player.vimeo.com/video/${videoId}?autoplay=1&title=0&byline=0&portrait=0"
                        allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                `;

                const iframe = document.getElementById("vimeoPlayer");
                player = new Vimeo.Player(iframe);

                player.on("ended", closeVideo);
            }

            modal.classList.add("is-open");
            modal.setAttribute("aria-hidden", "false");
            document.body.classList.add("video-open");
        }

        function closeVideo() {
            modal.classList.remove("is-open");
            modal.setAttribute("aria-hidden", "true");
            document.body.classList.remove("video-open");

            if (player) {
                player.unload().catch(() => { });
                player = null;
            }

            setTimeout(() => {
                frame.innerHTML = "";
            }, 400);
        }

        openButtons.forEach((button) => {
            button.addEventListener("click", () => openVideo(button));
        });

        closeButtons.forEach((button) => {
            button.addEventListener("click", closeVideo);
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && modal.classList.contains("is-open")) {
                closeVideo();
            }
        });
    }

    /* SCROLL VIDEO */
    const video = document.querySelector(".video-background");

    if (video && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#container",
                start: "top top",
                end: "bottom bottom",
                scrub: true
            }
        });

        video.addEventListener("loadedmetadata", () => {
            tl.to(video, {
                currentTime: video.duration
            });
        });
    }
});