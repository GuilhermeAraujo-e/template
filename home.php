<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link dos icones-->
    <script src="https://kit.fontawesome.com/3d5793b601.js" crossorigin="anonymous"></script>
    <!--Link das fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!--Link do CSS-->
    <link rel="stylesheet" href="css/styleloja.css">
    <!--Icone do site-->
    <link rel="shortcut icon" href="img/icone.png" type="image/x-png">
    <title>AsteriaMC</title>
</head>

<body>
    <div class="logotop">
        <img src="images/f2.png">
    </div>
    <?php require_once "_parts/_menu.php"; ?>
    <main>
    <section class="vips">
        <h1 class="tipo">bebidas</h1>
        <div class="mensal">
            <div class="item">
                <div class="valor">R$ 6,99</div>
                <img src="img/vip1.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Ultra</h1>
                <h3>Mensal (30 Dias)</h3>
                
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 9,99</div>
                <img src="img/vip2.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Legend</h1>
                <h3>Mensal (30 Dias)</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 19,99</div>
                <img src="img/vip3.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Titan</h1>
                <h3>Mensal (30 Dias)</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 29,99</div>
                <img src="img/vip4.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Zeus</h1>
                <h3>Mensal (30 Dias)</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
        </div>
        <h1 class="tipo">mais bebidas</h1>
        <div class="eterno">

            <div class="item">
                <div class="valor">R$ 27,99</div>
                <img src="img/vip1.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Ultra</h1>
                <h3>Eterno</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 39,99</div>
                <img src="img/vip2.png" style="width: 150px; height: 140px;margin-top: 25px;">
                <h1>Legend</h1>
                <h3>Eterno</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 79,99</div>
                <img src="img/vip3.png" style="width: 150px; height: 140px; margin-top: 25px;">
                <h1>Titan</h1>
                <h3>Eterno</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
            <div class="item">
                <div class="valor">R$ 119,99</div>
                <img src="img/vip4.png" style="width: 150px; height: 140px; margin-top: 25px;">
                <h1>Zeus</h1>
                <h3>Eterno</h3>
                <a href="beneficio.html"><p class="beneficio">Ver beneficios.</p></a>
            </div>
        </div>
        <h1 class="tipo">bibida</h1>
        <div class="unban">
            <div class="item">
                <div class="valor">R$ 9,99</div>
                <img src="img/unban.png" style="width: 130px; height: 130px; margin-top: 25px;">
                <h1>Unban</h1>
                <h3>Desbanimento Normal</h3>
            </div>
            <div class="item">
                <div class="valor">R$ 19,99</div>
                <img src="img/unbanip.png" style="width: 130px; height: 130px; margin-top: 25px;">
                <h1>Unban IP</h1>
                <h3>Desbanimento pelo IP</h3>
            </div>
     
        </div>
    </section> 
</main>
    <?php require '_parts/_footer.php'; ?>
    
</body>
</script>


</html>