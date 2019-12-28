;$(function() {
	'use strict';

	function get_order_details() {
		$.ajax({
			type: "post",
			url: "./checkout_order.php",
			dataType: "json"
		}).done(response => {
			console.log(response.msg);
			let products_total_price = response.msg;
			$(".subtotal_price").html(products_total_price + "$");
			$(".total_price").html((products_total_price + 25) + "$");
		}).fail(xhr => {
			console.log("Error: " + xhr.status + ", " + xhr.statusText);
		});
	}
	get_order_details();
});