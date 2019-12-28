$(function () {

    $('.products_load').on('click', '.wishlist_product', wishlist);
    $('.products_load').on('click', '.shop_cart', shop_cart);

    $('.product-filter').children().each((_i, product_filter) => $(product_filter).click(filter_products)); 

    function shop_cart(e) {
        e.preventDefault();
        const product_id = $(this).closest('.product').attr('data-id');
        if ($(this).find('.shop_cart_icon').hasClass('red')) {
          $(this).find('.shop_cart_icon').removeClass('red');
          $(this).find('.shop_cart_icon').addClass('white');
        }
        if ($(this).find('.shop_cart_icon').hasClass('white')) {
          $(this).find('.shop_cart_icon').addClass('red');
          $(this).find('.shop_cart_icon').removeClass('white');
        }
        $.ajax({
          url: './mark_as_added_to_cart.php',
          type: 'post',
          dataType: 'json',
          data: {
            product_id: product_id
          }
        }).done(function(response) {
            console.log(response.msg);
            load_all_products();
        }).fail(function(jqXHR, status, error) {
          let errormsg = jqXHR.status + ': ' + jqXHR.statusText;
          console.log("Error: " + errormsg);
        });
    }

    function filter_products(e) {
      e.preventDefault();
      const product_type = $(this).attr('data-product-type');
      if (product_type == 'all') {
        load_all_products();
      }
      if (product_type == 'vegetables') {
        filter_product(product_type);
      }
      if (product_type == 'fruits') {
        filter_product(product_type);
      }
      if (product_type == 'juice') {
        filter_product(product_type);
      } 
      if (product_type == 'dried') {
        filter_product(product_type);
      }
    }

    function filter_product(product_type) {
      $.ajax({
            type: 'post',
            dataType: 'json',
            url: './product_filter.php',
            data: {
              product_type: product_type
            }
        }).done(function(response) {
          $('.products_load').html(response.html_response);
        }).fail(function(xhr) {
          console.log("Error " + xhr.status + ", " + xhr.statusText);
        });
    }

    function wishlist(e) {
      e.preventDefault();
      console.log($(this));
      const product_id = $(this).closest('.product').attr('data-id');
      console.log(product_id);
      console.log($(this).find('.heart_icon'));
      if ($(this).find('.heart_icon').hasClass('red')) {
        $(this).find('.heart_icon').removeClass('red');
        $(this).find('.heart_icon').addClass('white');
      }
      if ($(this).find('.heart_icon').hasClass('white')) {
        $(this).find('.heart_icon').addClass('red');
        $(this).find('.heart_icon').removeClass('white');
      }
      $.ajax({
        url: './mark_as_wishlist.php',
        type: 'post',
        dataType: 'json',
        data: {
          product_id: product_id
        }
      }).done(function(response) {
          console.log(response.msg);
          load_all_products();
      }).fail(function(jqXHR, status, error) {
        let errormsg = jqXHR.status + ': ' + jqXHR.statusText;
        console.log("Error: " + errormsg);
      });
    };

    function load_all_products() {
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: './add_product_to_dom.php'
          }).done(function(response) {
            $('.products_load').html(response.html_response);
          }).fail(function(xhr) {
            console.log("Error " + xhr.status + ", " + xhr.statusText);
          });
        }

        load_all_products();
  });