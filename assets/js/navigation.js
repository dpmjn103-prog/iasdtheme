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

	function scrollToCurrentSection(behavior) {
		if (!window.location.hash) {
			return;
		}

		const target = document.getElementById(decodeURIComponent(window.location.hash.slice(1)));
		if (!target) {
			return;
		}

		const targetRect = target.getBoundingClientRect();
		const targetPosition = window.scrollY + targetRect.top + targetRect.height / 2;
		const centeredPosition = targetPosition - window.innerHeight / 2;
		const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

		window.scrollTo({
			top: Math.max(0, Math.min(centeredPosition, maxScroll)),
			behavior: behavior
		});
	}

	function isPrimaryNavigationHash() {
		if (!window.location.hash) {
			return false;
		}

		return Array.from(navigation.querySelectorAll("a[href]")).some(function (link) {
			const url = new URL(link.href, window.location.href);
			return url.origin === window.location.origin &&
				url.pathname === window.location.pathname &&
				url.search === window.location.search &&
				url.hash === window.location.hash;
		});
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
		const link = event.target.closest("a");

		if (
			!link ||
			event.defaultPrevented ||
			event.button !== 0 ||
			event.metaKey ||
			event.ctrlKey ||
			event.shiftKey ||
			event.altKey ||
			link.target ||
			link.hasAttribute("download")
		) {
			return;
		}

		const destination = new URL(link.href, window.location.href);
		if (
			destination.origin === window.location.origin &&
			destination.pathname === window.location.pathname &&
			destination.search === window.location.search &&
			destination.hash
		) {
			const target = document.getElementById(destination.hash.slice(1));
			if (target) {
				event.preventDefault();
				const behavior = window.matchMedia("(prefers-reduced-motion: reduce)").matches
					? "auto"
					: "smooth";

				closeMenu();
				if (window.location.hash !== destination.hash) {
					window.history.pushState(null, "", destination.href);
				}
				scrollToCurrentSection(behavior);
				return;
			}
		}

		closeMenu();
	});

	if (isPrimaryNavigationHash()) {
		window.requestAnimationFrame(function () {
			scrollToCurrentSection("auto");
		});
	}

	window.addEventListener("popstate", function () {
		if (isPrimaryNavigationHash()) {
			const behavior = window.matchMedia("(prefers-reduced-motion: reduce)").matches
				? "auto"
				: "smooth";
			scrollToCurrentSection(behavior);
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
