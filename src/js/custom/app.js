(function (w) {
	"use strict";
	var App = {
		init: function () {
			if (this.initialized) return;
			this.initialized = true;
			for (var obj in this)
				this[obj].hasOwnProperty("init") && this[obj]["init"](this);
			App.readyCallbacks.fire();
		},
		readyCallbacks: $.Callbacks(),
		ready: function (callback) {
			App.readyCallbacks.add(callback);
		},
		load: function () {
			console.log("call load");
			App.loadCallbacks.fire();
		},
		loadCallbacks: $.Callbacks(),
		onLoad: function (callback) {
			App.loadCallbacks.add(callback);
		},
	};
	w.App = App;
})(window);
