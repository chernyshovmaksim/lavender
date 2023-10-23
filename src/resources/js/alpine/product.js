import Alpine from "alpinejs";

Alpine.data("product", () => ({
	count: 1,

	increment() {
		this.count = this.count + 1;
	},

	decrement() {
		this.count <= 1 ? (this.count = 1) : (this.count = this.count - 1);
	},
}));
