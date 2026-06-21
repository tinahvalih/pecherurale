document.addEventListener("DOMContentLoaded", () => {
    initGlobalAudioPlayer();

    if (typeof initMenu === "function") {
        initMenu();
    }

    if (typeof initPageTransition === "function") {
        initPageTransition();
    }

    if (typeof initStartupIntro === "function") {
        initStartupIntro();
    }

    if (typeof initLanguageSwitcher === "function") {
        initLanguageSwitcher();
    }

    if (typeof initIntroPage === "function") {
        initIntroPage();
    }

    if (typeof initVideoModal === "function") {
        initVideoModal();
    }

    if (typeof initExperienceScroll === "function") {
        initExperienceScroll();
    }

    if (typeof initChapterNav === "function") {
        initChapterNav();
    }

    if (typeof initChapterVideo === "function") {
        initChapterVideo();
    }

    if (typeof initChapterInfo === "function") {
        initChapterInfo();
    }

    if (typeof initSmoothScroll === "function") {
        initSmoothScroll();
    }

    if (typeof initImmersion === "function") {
        initImmersion();
    }
});

function initGlobalAudioPlayer() {
    const storageKey = "geojeAudioState";
    const savedState = readState();
    const audio = document.createElement("audio");
    const miniPlayer = createMiniPlayer();
    let state = {
        src: "",
        title: "",
        category: "",
        description: "",
        tags: [],
        currentTime: 0,
        isPlaying: false,
    };

    audio.loop = true;
    audio.preload = "auto";
    document.body.appendChild(audio);
    document.body.appendChild(miniPlayer.root);

    window.GeojeAudioPlayer = {
        playTrack,
        toggle,
        pause,
        getState: () => ({ ...state }),
    };

    if (savedState && savedState.src) {
        state = { ...state, ...savedState };
        audio.src = state.src;
        audio.currentTime = Number(state.currentTime) || 0;
        updateMiniPlayer();

        if (state.isPlaying) {
            audio.play().catch(() => {
                state.isPlaying = false;
                saveState();
                updateMiniPlayer();
            });
        }
    }

    miniPlayer.button.addEventListener("click", toggle);

    audio.addEventListener("play", () => {
        state.isPlaying = true;
        saveState();
        updateMiniPlayer();
    });

    audio.addEventListener("pause", () => {
        state.isPlaying = false;
        saveState();
        updateMiniPlayer();
    });

    audio.addEventListener("timeupdate", () => {
        state.currentTime = audio.currentTime;
        saveState();
    });

    window.addEventListener("beforeunload", () => {
        state.currentTime = audio.currentTime || state.currentTime;
        saveState();
    });

    function playTrack(track) {
        const nextSrc = track.src || "";
        const isNewTrack = state.src !== nextSrc;

        state = {
            ...state,
            ...track,
            src: nextSrc,
            currentTime: isNewTrack ? 0 : state.currentTime,
            isPlaying: true,
        };

        if (isNewTrack) {
            audio.src = nextSrc;
            audio.currentTime = 0;
        }

        audio.play().catch(() => {
            state.isPlaying = false;
        }).finally(() => {
            saveState();
            updateMiniPlayer();
        });
    }

    function pause() {
        audio.pause();
    }

    function toggle() {
        if (!state.src) return;

        if (audio.paused) {
            audio.play().catch(() => {
                state.isPlaying = false;
                saveState();
                updateMiniPlayer();
            });
        } else {
            audio.pause();
        }
    }

    function createMiniPlayer() {
        const root = document.createElement("aside");
        root.className = "global-audio-player";
        root.setAttribute("aria-live", "polite");

        const button = document.createElement("button");
        button.className = "global-audio-player__button";
        button.type = "button";
        button.setAttribute("aria-label", "Lecture ou pause de l'ambiance sonore");

        const text = document.createElement("div");
        text.className = "global-audio-player__text";

        const label = document.createElement("span");
        label.className = "global-audio-player__label";
        label.textContent = "Lecture en cours";

        const title = document.createElement("span");
        title.className = "global-audio-player__title";

        text.append(label, title);
        root.append(button, text);

        return { root, button, title };
    }

    function updateMiniPlayer() {
        miniPlayer.root.classList.toggle("is-visible", Boolean(state.src));
        miniPlayer.root.classList.toggle("is-playing", Boolean(state.isPlaying));
        miniPlayer.title.textContent = state.title || "Bande sonore";
        miniPlayer.button.setAttribute(
            "aria-label",
            state.isPlaying ? "Mettre l'ambiance sonore en pause" : "Relancer l'ambiance sonore"
        );

        document.dispatchEvent(new CustomEvent("geoje-audio-state", {
            detail: { ...state },
        }));
    }

    function readState() {
        try {
            return JSON.parse(localStorage.getItem(storageKey) || "null");
        } catch (error) {
            return null;
        }
    }

    function saveState() {
        if (!state.src) return;

        try {
            localStorage.setItem(storageKey, JSON.stringify({
                ...state,
                currentTime: audio.currentTime || state.currentTime || 0,
            }));
        } catch (error) {
            // Storage can be unavailable in strict privacy modes.
        }
    }
}
