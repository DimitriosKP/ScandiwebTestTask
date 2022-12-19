$(document).ready(function () {
    $("#sku").keyup(function () {
        let $sku = $("#sku").val()
        $.post("includes/unique_sku.inc.php", {
            sku: $sku
        },
            function (data) {
                if (data == "invalid") {
                    $("#sku_check").text("*This SKU is already exists!")
                    document.getElementById("sku_check").style.color="red";
                    $("button[type='submit']").attr("disabled", true)
                } else if (data == "valid") {
                    $("#sku_check").text("")
                    $("button[type='submit']").attr("disabled", false)
                }
            } );
    } );
} );


function changed(obj) {
    var options = document.querySelectorAll('.option')

    options.forEach(function (option) {
        option.style.display = 'none'
    } )
    document.getElementById(obj.value).style.display = 'block'

    var sel = (obj.value);
    if (sel == 'dvd') {
        document.getElementById('size').setAttribute('required', '')
    } else if (sel == 'book') {
        document.getElementById('weight').setAttribute('required', '')
    } else if (sel == 'furniture') {
        document.getElementById('height').setAttribute('required', '')
        document.getElementById('width').setAttribute('required', '')
        document.getElementById('length').setAttribute('required', '')
    }
}