function initIntroVideo() {
    const intro = document.getElementById("introVideo");
    const skipBtn = document.getElementById("skipIntro");
    const introIframe = document.getElementById("introPlayer");

    if (!intro || !skipBtn || !introIframe) return;
    if (typeof Vimeo === "undefined") return;

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