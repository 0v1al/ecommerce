 $(function() {

    $('tbody').on('click', '.delete_btn', delete_product_from_wishlist);
    $('tbody').on('keyup', '.quantity', update_quantity);

    function update_quantity(e) {
        let product_quantity = e.target.value;
        let product_id = +($(this).closest('td').attr('data-id'));
        product_quantity = product_quantity.trim();
        product_quantity = product_quantity.replace(/\s/g, '');
        product_quantity = product_quantity.replace(/\D/g, '');
        product_quantity = product_quantity.replace(/^[0]/g, '');
        if (product_quantity === '') {
            product_quantity = 1;
            console.log(product_quantity);
        } else {
            product_quantity = Number(product_quantity);
            console.log(product_quantity);
        }
        
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './update_quantity.php',
            data: {
                product_quantity: product_quantity,
                product_id: product_id
            }
        }).done((response) => {
            if (response.ok == 0) {
                $(this).next().html(`${response.error}`).fadeIn();
            } else if (response.ok == 2) {
                $(this).next().fadeOut();
                console.log(response.msg);
            } else {
                $(this).next().fadeOut();
                let new_product_price = response.msg;
                $(this).parent().next().text(new_product_price);
                console.log(response.msg);
            }
        }).fail(function(xhr) {
            console.log("Error: " + xhr.status + ', ' + xhr.statusText);
        });
    }

    function delete_product_from_wishlist() {
        const product_id = $(this).attr('data-id');
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './mark_as_deleted.php',
            data: {
                product_id: +product_id
            }
        }).done(function(response) {
            $('.table_content').html(response.html_response);
        }).fail(function(xhr) {
            console.log('Error: ' + xhr.status + ', ' + xhr.statusText);
        });
        load_wishlist_products();
    }

    load_wishlist_products();

    function load_wishlist_products() {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: './add_wishlist_products.php'
        }).done(function(response) {
            $('.table_content').html(response.html_response);
        }).fail(function(xhr) {
            console.log("Error: " + xhr.status + ", " + xhr.statusText);
        });
    }

    $('.delete_btn').click(function() {
        alert('hei');
    });

});