
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax request</title>
</head>
<body>
    
<div id="winner">

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>

$(document).ready(async function(){

await $.ajax({
    type: "GET",
    url: `content.html`,
    success: function (res) {
        $('#winner').html(res);
    }
});

$dolar_actual_compra = $('.valor').eq(4).html();
$dolar_actual_venta = $('.valor').eq(5).html();
$euro_actual_compra = $('.valor').eq(12).html();
$euro_actual_venta = $('.valor').eq(13).html();

location.replace('generatejson.php'+'?dolar_venta='+$dolar_actual_venta
+'&dolar_compra='+$dolar_actual_compra+'&euro_compra='+$euro_actual_compra+'&euro_venta='+$euro_actual_venta);


});


</script>

</body>
</html>