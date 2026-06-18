function initImmersion() {
    const audioCards = document.querySelectorAll("[data-audio-card]");
    const drawer = document.querySelector("[data-audio-drawer]");
    const closeButton = document.querySelector("[data-audio-drawer-close]");
    const toggleButton = document.querySelector("[data-audio-drawer-toggle]");

    if (!audioCards.length || !drawer || !window.GeojeAudioPlayer) return;

    const drawerTitle = drawer.querySelector("[data-audio-drawer-title]");
    const drawerCategory = drawer.querySelector("[data-audio-drawer-category]");
    const drawerDescription = drawer.querySelector("[data-audio-drawer-description]");
    const drawerTags = drawer.querySelector("[data-audio-drawer-tags]");
    const drawerAction = drawer.querySelector("[data-audio-drawer-action]");

    function getTrackFromCard(card) {
        return {
            src: card.dataset.audioSrc || "",
            title: card.dataset.audioTitle || "Bande sonore",
            category: card.dataset.audioCategory || "Experience sonore",
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
        drawerAction.textContent = detail && detail.isPlaying ? "Pause" : "Lecture";
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
}
