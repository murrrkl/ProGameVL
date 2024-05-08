let orders = new Map();
let sum = 0;
let sum_text = document.getElementById("order_sum");
let order_text = document.querySelector(".order_text");
let error_text = document.querySelector(".order_error");
let order_text_form = document.getElementById("order_text_form");
let order_sum_form = document.getElementById("order_sum_form");
let order_btn = document.getElementById("order_btn");

error_text.style.display = "none";

function setOrderText() {
	let str = "";
	for (let art of orders.keys()) {
		let current_info = orders.get(art);
		str += "арт." + art;
		str += " " + current_info[0];
		str += " (" + current_info[2] + "шт.)";
		str += "<br>";
	}
	order_text.innerHTML = str;
	order_text_form.value = str;
}

function minus(id, name, price) {
	if (orders.has(id)) {
		let current_info = orders.get(id);
		current_info[2] -= 1;
		document.getElementById(id).innerHTML = current_info[2];
		sum -= price;
		sum_text.innerHTML = sum;
		order_sum_form.value = sum;

		if (sum <= 500) {
			error_text.style.display = "none";
			order_btn.disabled = false;
			order_btn.style.backgroundColor = 'MediumPurple';
		}

		if (current_info[2] == 0) {
			orders.delete(id);
		}
	}
	setOrderText();
}

function plus(id, name, price) {
	let current_info = [name, price, 1];
	if (orders.has(id)) {
		current_info = orders.get(id);
		current_info[2] += 1;
	}
	sum += price;
	sum_text.innerHTML = sum;
	order_sum_form.value = sum;

	if (sum > 500) {
		error_text.style.display = "block";
		order_btn.disabled = true;
		order_btn.style.backgroundColor = 'Gray';
	}

	orders.set(id, current_info);
	document.getElementById(id).innerHTML = current_info[2];
	setOrderText();
}