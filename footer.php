    <footer>

    </footer>
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