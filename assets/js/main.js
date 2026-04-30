document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.querySelector(".menu-button");

    if (menuButton) {
        menuButton.addEventListener("click", () => {
            document.body.classList.toggle("menu-open");
        });
    }
});

/* Video Modal */

document.addEventListener("DOMContentLoaded", () => {
    const modal = document.querySelector("#videoModal");
    const frame = document.querySelector("#videoFrame");
    const title = document.querySelector("#videoTitle");
    const eyebrow = document.querySelector("#videoEyebrow");

    const openButtons = document.querySelectorAll(".js-video-open");
    const closeButtons = document.querySelectorAll("[data-video-close]");

    if (!modal || !frame) return;

    function openVideo(button) {
        const provider = button.dataset.videoProvider || "vimeo";
        const videoId = button.dataset.videoId;
        const videoTitle = button.dataset.videoTitle || "";
        const videoEyebrow = button.dataset.videoEyebrow || "";

        if (!videoId) return;

        title.textContent = videoTitle;
        eyebrow.textContent = videoEyebrow;

        if (provider === "vimeo") {
            frame.innerHTML = `
        <iframe
          src="https://player.vimeo.com/video/${videoId}?autoplay=1&title=0&byline=0&portrait=0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
        ></iframe>
      `;
        }

        modal.classList.add("is-open");
        modal.setAttribute("aria-hidden", "false");
        document.body.classList.add("video-open");
    }

    function closeVideo() {
        modal.classList.remove("is-open");
        modal.setAttribute("aria-hidden", "true");
        document.body.classList.remove("video-open");

        frame.innerHTML = "";
        title.textContent = "";
        eyebrow.textContent = "";
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
});