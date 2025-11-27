(function (app) {
	"use strict";

	var Animation = function () {};

	let startingThreshold = app.bigScreens ? 80 : 90;

	Animation.prototype.init = function () {
		app.smoother = ScrollSmoother.create({
			smooth: 2,
			effects: true,
			smoothTouch: false,
		});

		Animation.prototype.transitionPresets();
	};

	Animation.prototype.transitionPresets = function () {
		if (app.mobile) {
			$(".transition-left")
				.removeClass("transition-left")
				.addClass("transition-right");
		}

		const stInstance = ScrollTrigger.create({
			start: `top ${startingThreshold}%`,
			toggleActions: "play none none none",
		});
		const defaultTweenProps = { duration: 0.8, ease: Power3.easeOut };

		animatedFade();
		animatedTop();
		animatedLeft();
		animatedRight();
		animatedBottom();
		animatedLeftStagger();
		animatedRightStagger();
		animatedBottomStagger();
		animatedTopstagger();
		animatedCounter();
		animatedScale();
		animatedFadeStagger();
		animatedPuzzleConnect();

		function animatedFade() {
			const fadedElements = gsap.utils.toArray(".transition-fade");
			if (fadedElements.length) {
				fadedElements.forEach((el) => {
					gsap.set(el, { visibility: "hidden" });
					gsap.from(el, {
						...defaultTweenProps,
						autoAlpha: 0,
						scrollTrigger: { trigger: el, ...stInstance.vars },
					});
				});
			}
		}

		function animateDirection(type, x, y) {
			const elements = gsap.utils.toArray(`.transition-${type}`);

			if (elements.length) {
				elements.forEach((el) => {
					gsap.set(el, { x, y, autoAlpha: 0 });

					const customTriggerDistance = $(el).data("trigger-distance");
					let triggerPreset = customTriggerDistance
						? { ...ScrollTrigger.create({ start: customTriggerDistance }).vars }
						: { ...stInstance.vars };

					gsap.to(el, {
						...defaultTweenProps,
						autoAlpha: 1,
						x: 0,
						y: 0,
						scrollTrigger: { ...triggerPreset, trigger: el },
					});
				});
			}
		}

		function animatedStagger(type, x, y) {
			const wrapper = gsap.utils.toArray(`.transition-${type}-stagger`);

			if (wrapper.length) {
				wrapper.forEach((wrap) => {
					const customTriggerDistance = $(wrap).data("trigger-distance");
					let triggerPreset = customTriggerDistance
						? { ...ScrollTrigger.create({ start: customTriggerDistance }).vars }
						: { ...stInstance.vars };
					const children = [...wrap.children];

					gsap.set(children, { x, y, autoAlpha: 0 });
					gsap.to(children, {
						autoAlpha: 1,
						x: 0,
						y: 0,
						stagger: { each: 0.2 },
						duration: 0.6,
						scrollTrigger: { ...triggerPreset, trigger: children },
					});
				});
			}
		}

		function animatedTop() {
			const element = document.querySelector(
				".transition-top.transition-top__inview"
			);
			const offset = element ? 40 : 100;
			animateDirection("top", 0, offset);
		}

		function animatedLeft() {
			animateDirection("left", 100, 0);
		}

		function animatedRight() {
			animateDirection("right", -100, 0);
		}

		function animatedBottom() {
			animateDirection("bottom", 0, -100);
		}

		function animatedLeftStagger() {
			animatedStagger("left", 100, 0);
		}

		function animatedRightStagger() {
			animatedStagger("right", -100, 0);
		}

		function animatedTopstagger() {
			animatedStagger("top", 0, 120);
		}

		function animatedBottomStagger() {
			animatedStagger("bottom", 0, 100);
		}

		function animatedFadeStagger() {
			animatedStagger("fade", 0, 0);
		}

		function animatedScale() {
			const elements = gsap.utils.toArray(".transition-scale");

			if (elements.length) {
				elements.forEach((el) => {
					const customTriggerDistance = $(el).data("trigger-distance");
					let triggerPreset = customTriggerDistance
						? { ...ScrollTrigger.create({ start: customTriggerDistance }).vars }
						: { ...stInstance.vars };

					gsap.set(el, { scale: 0.6, autoAlpha: 0 });
					gsap.to(el, {
						...defaultTweenProps,
						autoAlpha: 1,
						scale: 1,
						scrollTrigger: { ...triggerPreset, start: `top 100%`, trigger: el },
					});
				});
			}
		}

    // for the numbers
		function animatedCounter() {
			const elementsWithCounterEffect = gsap.utils.toArray(".transition-count");

			elementsWithCounterEffect.forEach((el) => {
				gsap.from(el, {
					textContent: 0,
					duration: 0.8,
					snap: { textContent: 1 },
					ease: Circ.easeOut,
					scrollTrigger: {
						trigger: el,
						...stInstance.vars,
					},
				});
			});
		}

		function animatedPuzzleConnect() {
			const block = document.querySelector(".puzzle-connect");
			if (!block || typeof gsap === "undefined") return;

			const left = block.querySelector(".puzzle-left");
			const right = block.querySelector(".puzzle-right");
			const heading = block.parentElement.querySelector(".connect-heading");

			if (!left || !right || !heading) return;

			// starting states
			gsap.set(left, { x: -100, autoAlpha: 1 });
			gsap.set(right, { x: 100, autoAlpha: 1 });
			gsap.set(heading, { autoAlpha: 0, y: 20 });

			const tl = gsap.timeline({
				scrollTrigger: {
					trigger: block,
					start: "top 80%",
					end: "top 10%",
					scrub: false,
				},
				defaults: { ease: Power2.easeOut },
			});

			tl.to(left, { x: 12 }, 0) // slide in from left
				.to(right, { x: -12 }, 0) // slide in from right
				// little "click" when they meet
				.to(
					[left, right],
					{ scale: 1.05, duration: 5.5, yoyo: true, repeat: 1 },
					0.5
				)
				// reveal heading after connection
				.to(heading, { autoAlpha: 1, y: 0 }, 0.8);
		}
	};

	app.Animation = Animation;

	app.ready(function () {
		console.log("Animation Ready");
	});

	app.onLoad(function () {
		console.log("Animation Load");
		Animation.prototype.init();
	});
})(window.App);
