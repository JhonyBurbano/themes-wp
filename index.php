
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colgate</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    
</head>
<body>
    <main>
        <?php include('header.php'); ?>
        <section>
            <input type="text" value="50" class="dial" id="dial">
            <div class="articulos">
                <img id="img_cepillos" class="img_cepillos" src="assets/img/cepillo-normal.png">
            </div>
            <div class="botones">
                <img id="img_btn_1" src="assets/img/numero-01.png">
                <img id="img_btn_2" src="assets/img/numero-02.png">
            </div>
        </section>
    </main>
    <script>
        $(function() {
            $(".dial").knob();
        });

        
        var boton1 = document.getElementById('img_btn_1');
        var boton2 = document.getElementById('img_btn_2');
        var dial_input = document.getElementById('dial');
        const img_cepillos = document.getElementById('img_cepillos');
        boton2.style.opacity = 0.2;    

        $('#img_btn_2').click(function(){
            document.getElementById('img_cepillos').src = "assets/img/cepillo-twister.png";
            boton1.style.opacity = 0.2;
            boton2.style.opacity = "";
            dial_input.value = "65";
        });
 
        $('#img_btn_1').click(function(){
            document.getElementById('img_cepillos').src = "assets/img/cepillo-normal.png";
            boton1.style.opacity = "";
            boton2.style.opacity = 0.2;
            dial_input.value = "50";
        });

    </script>
</body>
</html>