<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://www.paypal.com/sdk/js?client-id=Afx0rTlByEOSqTVABGpuSfGzYrptlHmOol46K8wHKXZtkC1ltnWi8dT_bmXCO4-WitKOZs5lMp4_0IYk&currency=MXN"></script>

</head>
<body>
<div id="paypal-button-container"> </div>
<script>
        paypal.Buttons({
            style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions){
                return actions.order.create({
                 purchase_units: [{
                     amount:{
                         value: 49.99
                     }
                 }]
                });

            },
            onApprove: function(data, actions){
                actions.order.capture().then(function(detalles){
                 window.location.href="completado.html"
                });

            },


            onCancel: function(data){
                alert("Pago cancelado")
                concole.log(data);
            }
        }).render('#paypal-button-container');
    </script>    

</body>
</html>