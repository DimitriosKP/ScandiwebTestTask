var box_content = "";
$(document).ready(function () {
    $.get("show_products.php",
        function (data) {
            var Products = JSON.parse(data);

            for (var i = 0; i < Products.length; i++) {
                $(".row").append("<div class='col-sm-3'>" + "<div class='p-2 border bg-light' style='border-radius: 3%;' id='product" + i+ "'></div>");

                switch (Products[i]['type']) {
                    case ('dvd'):
                        box_content = Products[i]['sku'] + '<br>' + Products[i]['name'] + '<br>' + '<b>Price: </b>' + Products[i]['price'] + '$ <br> <b>Size: </b>' + Products[i]['size'] + ' MB';
                        break;
                    case ('book'):
                        box_content = Products[i]['sku'] + '<br>' + Products[i]['name'] + '<br>' + '<b>Price: </b>' + Products[i]['price'] + '$ <br> <b>Weight: </b>' + Products[i]['weight'] + 'KG';
                        break;
                    case ('furniture'):
                        box_content = Products[i]['sku'] + '<br>' + Products[i]['name'] + '<br>' + '<b>Price: </b>' + Products[i]['price'] + '$ <br> <b>Dimension: </b>' + Products[i]['height'] + 'x' + Products[i]['width'] + 'x' + Products[i]['length'];
                        break;
                }

                $("#product" + i).html("<input type='checkbox' class='delete-checkbox' style='align-items: flex-start;' name='prods_delete[]' value='" + Products[i]['sku'] + "'>" + "<div style='text-align: center;'>" + box_content + "</div>");
                box_content = "";
            }
        } );
} );