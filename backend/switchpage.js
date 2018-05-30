$(function(){
    $("#category").click(function(){
        $("#right").load("category.php");
    });

    $("#product").click(function(){
        $("#right").load("product.php");
    });

    $("#order").click(function(){
        $("#right").load("order.php");
    });

    $("#shopconfig").click(function(){
        $("#right").load("shopconfig.php");
    });

    $("#user").click(function(){
        $("#right").load("user.php");
    });
});

