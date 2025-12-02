(function (app) {
	"use strict";

	var CustomCursor = function () {
		this.cursorEl = null;
		this.hoverTargets = null;
		this._moveHandler = null;
	};

	CustomCursor.prototype.init = function () {
		this.cursorEl = document.getElementById("custom-cursor");

		if (!this.cursorEl) {
			return;
		}

		this.hoverTargets = document.querySelectorAll(
			"a, button, [data-cursor-big]"
		);
		this.bindMouseMove();
		this.bindHoverTargets();
	};

	CustomCursor.prototype.bindMouseMove = function () {
		var self = this;

		this._moveHandler = function (e) {
			var x = e.clientX;
			var y = e.clientY;

			self.cursorEl.style.transform =
				"translate(" + x + "px, " + y + "px) translate(-50%, -50%)";
		};

		window.addEventListener("mousemove", this._moveHandler);
	};

	CustomCursor.prototype.bindHoverTargets = function () {
		var self = this;

		if (!this.hoverTargets || !this.hoverTargets.length) return;

		this.hoverTargets.forEach(function (el) {
			el.addEventListener("mouseenter", function () {
				self.cursorEl.classList.add("!w-12");
				self.cursorEl.classList.add("!h-12");
				self.cursorEl.classList.add("!text-muted");
			});

			el.addEventListener("mouseleave", function () {
				self.cursorEl.classList.remove("!w-12");
				self.cursorEl.classList.remove("!h-12");
				self.cursorEl.classList.remove("!text-muted");
			});
		});
	};

	CustomCursor.prototype.destroy = function () {
		if (this._moveHandler) {
			window.removeEventListener("mousemove", this._moveHandler);
		}
	};

	app.CustomCursor = CustomCursor;

	app.ready(function () {
		console.log("CustomCursor Ready");
	});

	app.onLoad(function () {
		console.log("CustomCursor Load");
		var cursor = new CustomCursor();
		cursor.init();
	});
})(window.App || (window.App = {}));
