function initChapterVideo() {
    const iframe = document.getElementById("chapterVideoPlayer");
    const endScreen = document.querySelector("[data-chapter-end-screen]");

    if (!iframe || !endScreen || typeof Vimeo === "undefined") return;

    const player = new Vimeo.Player(iframe);

    player.on("ended", () => {
        endScreen.classList.add("is-visible");
        endScreen.setAttribute("aria-hidden", "false");
    });

    player.on("play", () => {
        endScreen.classList.remove("is-visible");
        endScreen.setAttribute("aria-hidden", "true");
    });
}
