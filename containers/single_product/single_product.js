$(function() {
    let $btn_plus = $('.btn-plus');
    let $btn_minus = $('.btn-minus');
    let $input_field = $('.input_value');
    let $product_id = $('#single_product').attr("data-id");

    $input_field.val($input_field.attr("value"));

    $input_field.blur(() => {
        if (parseInt($input_field.val()) > 100 || parseInt($input_field.val()) < 1 || !parseInt($input_field.val())) 
            $input_field.val(1); 
    });

    $input_field.keyup(() => {
        $input_value = $input_field.val();
        // if ($input_value >= 100 || $input_value < 1) return;
        console.log($input_value);
        $.ajax({
            type: "post",
            dataType: "json",
            url: "./update_quantity.php",
            data: {
                product_quantity: $input_value.trim(),
                product_id: $product_id
            }
        }).done(response => {
            console.log(response.msg);
            let available = response.available;
            if (available == 1) {
                $(".error").fadeIn();
            } else {
                $(".error").fadeOut();
            }
        }).fail(xhr => {
            console.log("Error: " + xhr.status + ", " + xhr.statusText);
        });
    });

    $btn_plus.click(e => {
        $input_value = $input_field.val();
        // if ($input_value >= 100) return;
        $new_input_value = parseInt($input_value) + 1;
        $input_field.attr("value", $new_input_value);
        $input_field.val($new_input_value);

        $.ajax({
            type: "post",
            dataType: "json",
            url: "./update_quantity.php",
            data: {
                product_quantity: $new_input_value,
                product_id: $product_id
            }
        }).done(response => {
            console.log(response.msg);
            let available = response.available;
            if (available == 1) {
                $(".error").fadeIn();
            } else {
                $(".error").fadeOut();
            }
        }).fail(xhr => {
            console.log("Error: " + xhr.status + ", " + xhr.statusText);
        });
    });

    $btn_minus.click(e => {
        $input_value = $input_field.val();
        // if (parseInt($input_value) === 1) return;
        $new_input_value = parseInt($input_value) - 1;
        $input_field.attr("value", $new_input_value);
        $input_field.val($new_input_value);

        $.ajax({
            type: "post",
            dataType: "json",
            url: "./update_quantity.php",
            data: {
                product_quantity: $new_input_value,
                product_id: $product_id
            }
        }).done(response => {
            console.log(response.msg);
            let available = response.available;
            if (available == 1) {
                $(".error").fadeIn();
            } else {
                $(".error").fadeOut();
            }
        }).fail(xhr => {
            console.log("Error: " + xhr.status + ", " + xhr.statusText);
        });
    });

    $('.add_to_cart').click(add_to_cart);

    function add_to_cart(e) {
        $single_product_id = $(e.target.closest('#single_product')).attr('data-id');
        $.ajax({
            type: "post",
            url: "./add_to_cart.php",
            dataType: "json",
            data: {
                single_product_id: $single_product_id
            } 
        }).done(response => {
            console.log(response.msg);
            let added = response.added;
            if (added == 1) {
                $(".info").fadeIn();
                $(".add_cart_error").fadeOut();
            } else {
                $(".info").fadeOut();
                $(".add_cart_error").fadeIn();
            }
        }).fail(xhr => {
            console.log("Error: " + xhr.status + ", " + xhr.statusText);
        });
    }
});