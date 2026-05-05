function initIntroPage() {
    const introMain = document.querySelector(".intro-page__main");
    const introIframe = document.getElementById("introPagePlayer");

    if (!introMain || !introIframe) return;
    if (typeof Vimeo === "undefined") return;

    const nextPage = introMain.dataset.nextPage || "experience.php";
    const introPlayer = new Vimeo.Player(introIframe);

    function goToExperience() {
        document.body.classList.add("page-is-leaving");

        const transitionOverlay = document.querySelector(".page-transition");

        if (transitionOverlay) {
            transitionOverlay.classList.remove("is-hidden");
            transitionOverlay.classList.add("is-active");
        }

        setTimeout(() => {
            window.location.href = nextPage;
        }, 720);
    }

    introPlayer.on("ended", goToExperience);
}