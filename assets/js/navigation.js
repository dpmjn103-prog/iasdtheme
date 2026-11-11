document.addEventListener("DOMContentLoaded", function () {
	const intro = document.querySelector(".site-intro");
	const introVideo = intro ? intro.querySelector("video") : null;

	if (intro && introVideo) {
		let introClosed = false;
		let introTimeout;

		function closeIntro() {
			if (introClosed) {
				return;
			}

			introClosed = true;
			window.clearTimeout(introTimeout);
			introVideo.pause();
			intro.classList.add("is-hidden");
			document.body.classList.remove("site-intro-active");
			window.setTimeout(function () {
				intro.remove();
			}, 500);
		}

		if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
			closeIntro();
		} else {
			document.body.classList.add("site-intro-active");
			introVideo.addEventListener("ended", closeIntro, { once: true });
			introVideo.addEventListener("error", closeIntro, { once: true });
			introTimeout = window.setTimeout(closeIntro, 20000);
			introVideo.play().catch(closeIntro);
		}
	}

	const toggle = document.querySelector(".menu-toggle");
	const navigation = document.querySelector(".primary-navigation");

	if (!toggle || !navigation) {
		return;
	}

	function closeMenu() {
		toggle.setAttribute("aria-expanded", "false");
		navigation.classList.remove("is-open");
	}

	toggle.addEventListener("click", function () {
		const isExpanded = toggle.getAttribute("aria-expanded") === "true";
		toggle.setAttribute("aria-expanded", String(!isExpanded));
		navigation.classList.toggle("is-open", !isExpanded);
	});

	navigation.addEventListener("click", function (event) {
		if (event.target.closest("a")) {
			closeMenu();
		}
	});

	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape" && toggle.getAttribute("aria-expanded") === "true") {
			closeMenu();
			toggle.focus();
		}
	});
});
