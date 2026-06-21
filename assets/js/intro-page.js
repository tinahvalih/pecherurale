function initIntroPage() {
    const introMain = document.querySelector(".intro-page__main");
    const introIframe = document.getElementById("introPagePlayer");
    const fullscreenButton = document.querySelector("[data-intro-fullscreen]");

    if (!introMain || !introIframe) return;
    if (typeof Vimeo === "undefined") return;

    const nextPage = introMain.dataset.nextPage || "chapitres.php";
    const introEnd = Number(introMain.dataset.introEnd) || 0;
    const introPlayer = new Vimeo.Player(introIframe);
    let hasLeftIntro = false;

    function goToExperience() {
        if (hasLeftIntro) return;
        hasLeftIntro = true;

        document.body.classList.add("page-is-leaving");

        const transitionOverlay = document.querySelector(".page-transition");

        if (transitionOverlay) {
            transitionOverlay.classList.remove("is-hidden");
            transitionOverlay.classList.add("is-active");
        }

        setTimeout(() => {
            window.location.href = nextPage;
        }, 820);
    }

    introPlayer.on("ended", goToExperience);

    if (fullscreenButton) {
        fullscreenButton.addEventListener("click", () => {
            if (typeof introPlayer.requestFullscreen === "function") {
                introPlayer.requestFullscreen().catch(() => {
                    requestFrameFullscreen();
                });
            } else {
                requestFrameFullscreen();
            }
        });
    }

    if (introEnd > 0) {
        introPlayer.on("timeupdate", (event) => {
            if (event.seconds >= introEnd) {
                introPlayer.pause().catch(() => {});
                goToExperience();
            }
        });
    }

    function requestFrameFullscreen() {
        const target = introIframe.closest(".intro-page__video-card") || introIframe;

        if (target.requestFullscreen) {
            target.requestFullscreen().catch(() => {});
        } else if (target.webkitRequestFullscreen) {
            target.webkitRequestFullscreen();
        }
    }
}
