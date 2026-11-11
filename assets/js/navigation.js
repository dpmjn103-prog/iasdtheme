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

	if (navigation) {
		navigation.querySelectorAll(".menu-item-has-children").forEach(function (item, index) {
			const link = item.querySelector(":scope > a");
			const submenu = item.querySelector(":scope > .sub-menu");

			if (!link || !submenu) {
				return;
			}

			if (!submenu.id) {
				submenu.id = "primary-submenu-" + index;
			}

			const submenuToggle = document.createElement("button");
			submenuToggle.className = "submenu-toggle";
			submenuToggle.type = "button";
			submenuToggle.setAttribute("aria-controls", submenu.id);
			submenuToggle.setAttribute("aria-expanded", "false");
			submenuToggle.setAttribute("aria-label", "Abrir submenú de " + link.textContent.trim());
			submenuToggle.innerHTML = '<span aria-hidden="true"></span>';
			link.after(submenuToggle);

			submenuToggle.addEventListener("click", function () {
				const isExpanded = submenuToggle.getAttribute("aria-expanded") === "true";
				submenuToggle.setAttribute("aria-expanded", String(!isExpanded));
				submenuToggle.setAttribute(
					"aria-label",
					(isExpanded ? "Abrir submenú de " : "Cerrar submenú de ") + link.textContent.trim()
				);
				item.classList.toggle("submenu-open", !isExpanded);
			});
		});
	}

	if (!toggle || !navigation) {
		return;
	}

	function closeMenu() {
		toggle.setAttribute("aria-expanded", "false");
		navigation.classList.remove("is-open");
		navigation.querySelectorAll(".submenu-toggle[aria-expanded='true']").forEach(function (submenuToggle) {
			submenuToggle.setAttribute("aria-expanded", "false");
			submenuToggle.setAttribute(
				"aria-label",
				"Abrir submenú de " + submenuToggle.parentElement.querySelector(":scope > a").textContent.trim()
			);
			submenuToggle.parentElement.classList.remove("submenu-open");
		});
	}

	toggle.addEventListener("click", function () {
		const isExpanded = toggle.getAttribute("aria-expanded") === "true";
		if (isExpanded) {
			closeMenu();
			return;
		}

		toggle.setAttribute("aria-expanded", "true");
		navigation.classList.add("is-open");
	});

	navigation.addEventListener("click", function (event) {
		if (event.target.closest("a")) {
			closeMenu();
		}
	});

	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape" && toggle.getAttribute("aria-expanded") === "true") {
			const openSubmenuToggle = navigation.querySelector(".submenu-toggle[aria-expanded='true']");
			if (openSubmenuToggle) {
				openSubmenuToggle.setAttribute("aria-expanded", "false");
				openSubmenuToggle.setAttribute(
					"aria-label",
					"Abrir submenú de " + openSubmenuToggle.parentElement.querySelector(":scope > a").textContent.trim()
				);
				openSubmenuToggle.parentElement.classList.remove("submenu-open");
				openSubmenuToggle.focus();
				return;
			}

			closeMenu();
			toggle.focus();
		}
	});
});
