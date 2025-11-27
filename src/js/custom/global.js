(function (app) {
	"use strict";

	app.responsive = () => {
		//Reference breakpoints scss file for values
		const screenPresets = {
			mobile: 100,
			tablet: 768,
			tabletLandscape: 1024,
			laptop: 1366,
			desktop: 1440,
			desktopXL: 1600,
			desktopWide: 2000,
		};

		const width = window.innerWidth;

		return {
			mobile: () => {
				if (width < screenPresets.tablet - 1) return true;
				return false;
			},
			tablet: () => {
				if (
					width >= screenPresets.tablet &&
					width < screenPresets.tabletLandscape - 1
				)
					return true;
				return false;
			},
			tabletLandscape: () => {
				if (
					width >= screenPresets.tabletLandscape &&
					width < screenPresets.laptop - 1
				)
					return true;
				return false;
			},
			laptop: () => {
				if (width >= screenPresets.laptop && width < screenPresets.desktop - 1)
					return true;
				return false;
			},
			desktop: () => {
				if (
					width >= screenPresets.desktop &&
					width < screenPresets.desktopXL - 1
				)
					return true;
				return false;
			},
			desktopXL: () => {
				if (
					width >= screenPresets.desktopXL &&
					width < screenPresets.desktopWide - 1
				)
					return true;
				return false;
			},
			desktopWide: () => {
				if (width >= screenPresets.desktopWide) return true;
				return false;
			},
		};
	};

	const {
		mobile,
		tablet,
		tabletLandscape,
		laptop,
		desktop,
		desktopXL,
		desktopWide,
	} = app.responsive();

	app.bigScreens = laptop() || desktop() || desktopXL() || desktopWide();
	app.bigScreensV2 = app.bigScreens || tabletLandscape();
	app.smallScreens = tablet() || mobile();
	app.tablet = tablet();
	app.mobile = mobile();

	var Global = function () {};

	Global.prototype.init = function () {
		Global.prototype.reloadOnPageResize();
		Global.prototype.handleHeaderNavScroll();
	};

	Global.prototype.reloadOnPageResize = function () {
		window.windowWidth = window.innerWidth;
		window.resizeTimer;

		$(window).on("resize", function () {
			window.reloadPage();
		});

		window.reloadPage = () => {
			if (window.innerWidth !== window.windowWidth) {
				window.windowWidth = window.innerWidth;
				clearTimeout(window.resizeTimer);
				window.resizeTimer = setTimeout(function () {
					$("body").css("opacity", "0");
					window.location.reload();
					Boolean;
				}, 250);
			}
		};

		if (app.smallScreens) {
			$(".hero").addClass("hero--mobile");
		} else {
			$(".hero").removeClass("hero--mobile");
		}
	};

	Global.prototype.handleHeaderNavScroll = function () {
		const headerContainer = ".header-wrapper";
		const headerContainerInner = $(".header-wrapper__inner");
		const headerMenuToggle = $(".header__menu-toggle");

		const headerHeight = $(".header-wrapper").innerHeight();

		if ($(".container--no-hero").length) {
			headerBgMatch();
		}

		ScrollTrigger.create({
			trigger: "body",
			start: "5px top",
			onLeaveBack: () => {
				if ($(".container--no-hero").length) return;
				$(".header-wrapper__inner").removeClass(
					"match-bg--desktop match-bg--mobile"
				);
			},
		});

		ScrollTrigger.create({
			trigger: "body",
			pin: headerContainer,
			pinSpacing: false,
			start: "top top",
			endTrigger: "footer",
			end: "bottom top",
			pinType: app.smallScreens ? "fixed" : "transform",
		});

		ScrollTrigger.create({
			trigger: "body",
			start: "top top",
			end: "max",
			onUpdate: (self) => {
				if (self.direction == 1) {
					hideHeader(true);
					headerBgMatch();
				} else {
					hideHeader(false);
				}
			},
		});

		function hideHeader(state) {
			if (headerMenuToggle.hasClass("active")) return;

			const animationPreset = {
				ease: Power3.easeOut,
				duration: 1,
				delay: 0,
				overwrite: true,
			};

			if (state) {
				if (headerContainerInner.hasClass("is-nav-hidden")) return;

				gsap.to(headerContainerInner, {
					y: -headerHeight,
					...animationPreset,
				});

				headerContainerInner.addClass("is-nav-hidden");
			} else {
				if (!headerContainerInner.hasClass("is-nav-hidden")) return;

				gsap.to(headerContainerInner, {
					y: 0,
					...animationPreset,
				});

				headerContainerInner.removeClass("is-nav-hidden");
			}
		}

		function headerBgMatch() {
			if (app.smallScreens) {
				$(".header-wrapper__inner").addClass("match-bg--mobile");
			} else {
				$(".header-wrapper__inner").addClass("match-bg--desktop");
			}
		}
	};

	app.Global = Global;

	app.ready(function () {
		Global.prototype.init();
	});

	app.onLoad(function () {});
})(window.App);
