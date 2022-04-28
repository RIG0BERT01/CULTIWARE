<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LOGO CULTIWARE.jpg" type="image/x-icon" />
    <title >Suscripciones</title>
	<link rel="stylesheet" type="text/css" href="css/suscripcion.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://www.paypal.com/sdk/js?client-id=Afx0rTlByEOSqTVABGpuSfGzYrptlHmOol46K8wHKXZtkC1ltnWi8dT_bmXCO4-WitKOZs5lMp4_0IYk&currency=MXN"></script>
</head>
<body>
<section class="pp-section">
 <div class="container">
    <div class="row">
     <div class="col-12">
        <div class="section-header text-center">
         <h2 class="sub-title2"> ELIGE UN MÉTODO DE PAGO</h2>
        </div>
     </div>
    </div>
    <div class="row plan-table">
        
    <div class="col-lg-4 col-md-6">
         <div class="plan-style orange-shadow active">
            <div class="plan-style-bg orange-bg-img"></div>
            <div class="plan-header">
             <h3 class="bg-orange">Estándar</h3>
             <p class="price bg-orange">$ <span class="price-digit">99.99</span>/m</p><br>
            </div>
            <div class="plan-detail">
                <img src="images/2.png" alt=""><br><br>
                <p>Válido por seis meses</p><br>
            </div>
            
         </div>
        </div>
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
                         value: 99.99
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