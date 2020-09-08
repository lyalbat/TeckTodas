<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teck Todas: Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/ic1.jfif">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <!-- Fazendo o toggle funcionar no mobile e tablet -->
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
</script>
</head>
<body>
    <nav>
    <ul class="menu"> 
        <li class="logo"><a href="#"><img src="imagens/logo.png" alt="logo da TeckTodas"></a></li>
        <li class="item"><a href="#">Sobre Nós</a></li>
        <li class="item button secondary"><a href="#">Quero fazer parceria</a></li>
        <li class="item button"><a href="#">Cadastre-se</a></li>
        <li class="toggle"><span class="bars"></span></li>
    </ul>
    </nav>