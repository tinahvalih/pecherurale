function initImmersion() {
    const audioCards = document.querySelectorAll("[data-audio-card]");
    const drawer = document.querySelector("[data-audio-drawer]");
    const closeButton = document.querySelector("[data-audio-drawer-close]");
    const toggleButton = document.querySelector("[data-audio-drawer-toggle]");

    if (!audioCards.length || !drawer || !window.GeojeAudioPlayer) return;

    const drawerTitle = drawer.querySelector("[data-audio-drawer-title]");
    const drawerCategory = drawer.querySelector("[data-audio-drawer-category]");
    const drawerDescription = drawer.querySelector("[data-audio-drawer-description]");
    const drawerImage = drawer.querySelector("[data-audio-drawer-image]");
    const drawerTags = drawer.querySelector("[data-audio-drawer-tags]");
    const drawerAction = drawer.querySelector("[data-audio-drawer-action]");
    let labels = getLabels();

    function getLabels() {
        const lang = document.documentElement.lang === "ko" ? "ko" : "fr";

        return {
            fallbackTitle: lang === "ko" ? "사운드 트랙" : "Bande sonore",
            fallbackCategory: lang === "ko" ? "사운드 체험" : "Experience sonore",
            pause: lang === "ko" ? "일시정지" : "Pause",
            play: lang === "ko" ? "재생" : "Lecture",
        };
    }

    function getTrackFromCard(card) {
        return {
            src: card.dataset.audioSrc || "",
            image: card.dataset.audioImage || "assets/img/tape.png",
            title: card.dataset.audioTitle || labels.fallbackTitle,
            category: card.dataset.audioCategory || labels.fallbackCategory,
            description: card.dataset.audioDescription || "",
            tags: (card.dataset.audioTags || "")
                .split(",")
                .map((tag) => tag.trim())
                .filter(Boolean),
        };
    }

    function renderDrawer(track) {
        if (drawerTitle) drawerTitle.textContent = track.title;
        if (drawerCategory) drawerCategory.textContent = track.category;
        if (drawerDescription) drawerDescription.textContent = track.description;
        if (drawerImage) drawerImage.src = track.image;

        if (drawerTags) {
            drawerTags.innerHTML = "";
            track.tags.forEach((tag) => {
                const item = document.createElement("span");
                item.textContent = tag;
                drawerTags.appendChild(item);
            });
        }
    }

    function setDrawerOpen(isOpen) {
        document.body.classList.toggle("audio-drawer-open", isOpen);
        drawer.setAttribute("aria-hidden", isOpen ? "false" : "true");
    }

    function updateDrawerAction(detail) {
        if (!drawerAction) return;
        const isPlaying = Boolean(detail && detail.isPlaying);
        drawerAction.textContent = isPlaying ? labels.pause : labels.play;

        if (toggleButton) {
            toggleButton.classList.toggle("is-playing", isPlaying);
        }
    }

    audioCards.forEach((card) => {
        card.addEventListener("click", () => {
            const track = getTrackFromCard(card);

            renderDrawer(track);
            window.GeojeAudioPlayer.playTrack(track);
            setDrawerOpen(true);
        });
    });

    if (closeButton) {
        closeButton.addEventListener("click", () => {
            setDrawerOpen(false);
        });
    }

    if (toggleButton) {
        toggleButton.addEventListener("click", () => {
            window.GeojeAudioPlayer.toggle();
        });
    }

    document.addEventListener("geoje-audio-state", (event) => {
        updateDrawerAction(event.detail);
    });

    document.addEventListener("geoje-language-change", () => {
        labels = getLabels();
        const currentTrack = window.GeojeAudioPlayer.getState();
        const activeCard = Array.from(audioCards).find((card) => card.dataset.audioSrc === currentTrack.src);

        if (activeCard && typeof window.GeojeAudioPlayer.updateTrackMeta === "function") {
            window.GeojeAudioPlayer.updateTrackMeta(getTrackFromCard(activeCard));
        }

        updateDrawerAction(window.GeojeAudioPlayer.getState());
    });
}
