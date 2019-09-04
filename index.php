<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    
</head>
<body>
    <?php include('header.php') ?>
    <input type="text" value="75" class="dial">

<script>
    $(function() {
        $(".dial").knob();
    });
</script>
</body>
</html>