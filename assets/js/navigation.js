document.addEventListener("DOMContentLoaded", function () {
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
