(function (app) {
	"use strict";

	var Theme = function () {};

	Theme.prototype.init = function () {
		this.changeTheme();
	};

	Theme.prototype.changeTheme = function () {
		const doc = document.documentElement;
		const THEMES = [
			{ key: "winter", label: "winter", emoji: "❄️" },
			{ key: "spring", label: "spring", emoji: "🌸" },
			{ key: "summer", label: "summer", emoji: "☀️" },
			{ key: "fall", label: "fall", emoji: "🍂" },
			{ key: "mono", label: "mono", emoji: "⬛" },
		];

		// nav stuff (if present)
		const menu = document.querySelector(".nav");
		const toggle = document.querySelector(".nav__toggle");
		const links = document.querySelectorAll(".nav__links a");

		// theme controls (legacy select + new icon row)
		const select = document.getElementById("theme-select");
		const bar = document.getElementById("theme-selector");
		const iconBase = (
			bar?.dataset?.iconPath || "/src/images/theme-icons"
		).replace(/\/+$/, "");

		// ----- Logo bits
		const logoEl = document.getElementById("brand-logo");
		const LOGO_MAP = {
			winter: "jam-winter.png",
			spring: "jam-spring.png",
			summer: "jam-summer.png",
			fall: "jam-fall.png",
			mono: "jam-mono.png",
		};

		// Themes considered "dark background" for logo styling
		const DARK_THEMES = new Set(["summer", "fall", "mono"]);

		const getLogoUrl = (theme) => {
			const base = (logoEl?.dataset?.logoBase || "/src/images/logos").replace(
				/\/+$/,
				""
			);
			const file = LOGO_MAP[theme] || LOGO_MAP.winter;
			return `${base}/${file}?v=1`; // cache-bust
		};

		const setLogo = (theme) => {
			if (!logoEl) return;
			const url = getLogoUrl(theme);

			// graceful fallback: try winter, then no-cache
			const onError = () => {
				logoEl.onerror = null; // avoid loops
				const fallback = getLogoUrl("winter").replace(/\?v=\d+$/, "");
				logoEl.src = `${fallback}?v=${Date.now()}`;
			};

			logoEl.onerror = onError;
			logoEl.src = url;

			// CSS hook for dark themes (purely for styling the logo)
			logoEl.classList.toggle("logo--on-dark", DARK_THEMES.has(theme));
		};

		// ----- Helpers
		const clampTheme = (t) => (THEMES.some((x) => x.key === t) ? t : "winter");

		const applyTheme = (t) => {
			const theme = clampTheme(t);
			doc.classList.remove(...THEMES.map((x) => x.key));
			doc.classList.add(theme);
			localStorage.setItem("theme", theme);

			// sync UI states
			if (select) select.value = theme;
			bar?.querySelectorAll(".theme-option").forEach((btn) => {
				const active = btn.dataset.theme === theme;
				btn.classList.toggle("active", active);
				btn.setAttribute("aria-pressed", String(active));
			});

			// update logo each time theme changes
			setLogo(theme);
		};

		// ----- Build icon row if container exists
		if (bar) {
			bar.setAttribute("role", "group");
			bar.setAttribute("aria-label", "Theme");

			THEMES.forEach(({ key, label, emoji }) => {
				const btn = document.createElement("button");
				btn.className = "theme-option";
				btn.type = "button";
				btn.dataset.theme = key;
				btn.setAttribute("aria-label", label);
				btn.setAttribute("aria-pressed", "false");
				btn.title = label;

				const img = document.createElement("img");
				img.alt = label;
				img.loading = "lazy";
				img.src = `${iconBase}/${key}.png?v=1`;

				// graceful fallback if path/MIME fails
				img.onerror = () => {
					img.remove();
					const span = document.createElement("span");
					span.className = "fallback";
					span.textContent = emoji; // ❄️ 🌸 ☀️ 🍂 ⬛
					btn.appendChild(span);
				};

				btn.appendChild(img);
				bar.appendChild(btn);

				const activate = () => applyTheme(key);
				btn.addEventListener("click", activate);
				btn.addEventListener("keydown", (e) => {
					if (e.key === "Enter" || e.key === " ") {
						e.preventDefault();
						activate();
					}
				});
			});
		}

		// ----- Init with saved theme
		const saved = localStorage.getItem("theme") || "winter";
		applyTheme(saved);

		// ----- Legacy select still works
		select?.addEventListener("change", (e) => applyTheme(e.target.value));

		// ----- Nav toggle unchanged
		toggle?.addEventListener("click", () => {
			const open = toggle.getAttribute("aria-expanded") === "true";
			toggle.setAttribute("aria-expanded", String(!open));
			menu?.classList.toggle("is-open", !open);
		});

		links.forEach((a) =>
			a.addEventListener("click", () => {
				if (toggle && getComputedStyle(toggle).display !== "none") {
					toggle.setAttribute("aria-expanded", "false");
					menu?.classList.remove("is-open");
				}
			})
		);

		// Small visual polish: fade color transitions
		doc.style.transition =
			"background-color .2s linear, color .2s linear, border-color .2s linear";
	};

	app.Theme = Theme;

	app.ready(function () {
		console.log("Theme Ready");
	});

	app.onLoad(function () {
		console.log("Theme Load");
		const theme = new Theme();
		theme.init();
	});
})(window.App);
