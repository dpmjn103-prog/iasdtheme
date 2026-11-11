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

	navigation.querySelectorAll("li.menu-item-has-children").forEach(function (item, index) {
		const submenu = item.querySelector(":scope > .sub-menu");
		const link = item.querySelector(":scope > a");

		if (!submenu || !link || item.querySelector(":scope > .submenu-toggle")) {
			return;
		}

		if (!submenu.id) {
			submenu.id = "primary-submenu-" + index;
		}

		const submenuToggle = document.createElement("button");
		const label = document.createElement("span");
		submenuToggle.type = "button";
		submenuToggle.className = "submenu-toggle";
		submenuToggle.setAttribute("aria-expanded", "false");
		submenuToggle.setAttribute("aria-controls", submenu.id);
		label.className = "screen-reader-text";
		label.textContent = "Mostrar opciones de " + link.textContent.trim();
		submenuToggle.appendChild(label);
		link.after(submenuToggle);
	});

	navigation.querySelectorAll(".submenu-toggle").forEach(function (submenuToggle) {
		const item = submenuToggle.closest("li");

		function setSubmenuOpen(isOpen) {
			submenuToggle.setAttribute("aria-expanded", String(isOpen));
			item.classList.toggle("submenu-open", isOpen);
		}

		submenuToggle.addEventListener("click", function () {
			const isExpanded = submenuToggle.getAttribute("aria-expanded") === "true";
			setSubmenuOpen(!isExpanded);
		});

		item.addEventListener("mouseenter", function () {
			setSubmenuOpen(true);
		});

		item.addEventListener("mouseleave", function () {
			setSubmenuOpen(false);
		});

		item.addEventListener("focusin", function () {
			setSubmenuOpen(true);
		});

		item.addEventListener("focusout", function (event) {
			if (!item.contains(event.relatedTarget)) {
				setSubmenuOpen(false);
			}
		});
	});

	function closeMenu() {
		toggle.setAttribute("aria-expanded", "false");
		navigation.classList.remove("is-open");
		navigation.querySelectorAll(".submenu-toggle").forEach(function (submenuToggle) {
			submenuToggle.setAttribute("aria-expanded", "false");
			submenuToggle.closest("li").classList.remove("submenu-open");
		});
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
		if (event.key !== "Escape") {
			return;
		}

		const openSubmenu = navigation.querySelector(".submenu-open > .submenu-toggle");
		if (openSubmenu) {
			openSubmenu.setAttribute("aria-expanded", "false");
			openSubmenu.closest("li").classList.remove("submenu-open");
			openSubmenu.focus();
			return;
		}

		if (toggle.getAttribute("aria-expanded") === "true") {
			closeMenu();
			toggle.focus();
		}
	});
});
