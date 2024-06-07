var listingPrice = document.getElementById("listing-price");
var retailPrice = document.getElementById("retail-price")
var revenue = document.getElementById("revenue");
var revenuePercent = document.getElementById("revenue-percent")
var srp = 0;

listingPrice.addEventListener('blur', function(e){
    var lp = e.target.value
    
    revenue.value = (srp - lp).toFixed(2)
})

retailPrice.addEventListener('input', function(e){
    srp = e.target.value
    var rev = (srp - listingPrice.value).toFixed(2)

    revenue.value = rev;
    revenuePercent.value = ((rev / srp) * 100).toFixed(2) + " %"

})


$(document).ready(function(){

    $("#btn-add-item").click(function() {

        var lp = $("#listing-price").val();
        var item = $("#item-name").val();
        var rp = $("#retail-price").val();

        var rev = $("#revenue").val();
        var revP = $("#revenue-percent").val();
        var qty = 0;

        if($.trim(lp) != "" && $.trim(item) != "" && $.trim(rp) != ""){
            $.post("/items", {
                item_name: item,
                listing_price: lp,
                retail_price: rp,
                revenue: rev,
                revenue_perc: revP,
                qty: qty 
            }, function(data, status){
                console.log(JSON.stringify(data));
                alert('noice')
                // console.log(status);
                // console.log(data);
                // console.log(status);
                // $("#listing-price").val("");
                // $("#item-name").val("");
                // $("#retail-price").val("");
                // $("#revenue").val("");
                // $("#revenue-percent").val("");
                // $("#test").html(data);
                // $("#regis-table").load("actions/supply/regis-table.php");
            })
            .fail(function(data) {
                console.log(JSON.stringify(data));
                alert('fail');
            });
        }


    })

});
