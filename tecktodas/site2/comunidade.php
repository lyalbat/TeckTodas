<?php
session_start();

if(!isset($_SESSION['nome']) or empty($_SESSION['nome'])){
	echo '<script>
		alert("Realize o login e confira as novidades por aqui...");
		history.go(-1);
	</script>';
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="../imagens/ic1.jfif">

<title>Comunidade - TeckTodas</title>
</head>
<body>
    <header>
        <a href="index.html"><img src="../imagens/logo.png" alt="Logo"></a>
        <a href="#" id="about">Sobre Nós</a>
    </header>
    <div class="scroll-vertical">
        <div class="container">
            <a href="#" ><i class="fa fa-user fa-2x" aria-hidden="true" id="vert-icon"></i><p>Perfil</p></a>
            <a href="#" ><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i><p>Vagas</p></a>
            <a href="#" ><i class="fa fa-comments fa-2x" aria-hidden="true"></i><p>Comunidade</p></a>
            <a href="#" ><i class="fa fa-play-circle-o fa-2x" aria-hidden="true"></i><p>  Mentorias</p></a>
            <a href="#"><i class="fa fa-cog fa-2x" aria-hidden="true" id="vert-icon"></i><p>Configurações</p></a>
            <a href="../php/sair.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true" id="vert-icon"></i><p>Sair</p></a>
    </div>
    </div>
    <div class="main">
        <div id="main-up">
        <h1 style="font-size:30px; margin-bottom: 8px;">Comunidade Aberta</h1>
        <form action="../php/post_mulher.php" method="post">
        <div id="post" style="border-radius: 30px; width: 400px;">
        	<input type="hidden" name="id" value="<?=$_SESSION['id_mulher'];?>">
            <textarea name="post" style="width: 500px;" ></textarea><button type="submit">Enviar</button>
        </div>
        </form>
    </div>
        <div class="feed" id="setTime">
            <?php include ('atualiza.php'); ?>
        </div>
    </div>
    <footer>
        <a href="index.html"><img src="../imagens/logo.png" alt="Logo"></a>
        <div class="direito">
        <div class="social-media">
            <nav id="nav-footer">
            <a href="#"><i class="fa fa-facebook fa-lb" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lb" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play fa-lb" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-whatsapp fa-lb" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lb" aria-hidden="true"></i></a>
        </nav>
        </div>
        <p id="marca">© 2020  Teck Todas. Todos os direitos reservados.</p>
    </div>
    </footer>
    <style>
        *{
            font: "Roboto", "sans serife";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            color: white;
        }
        body{
            background: #4F3E6A;
            display: grid;
            grid-template-rows: 114px 5% 38% 70px;
            grid-template-columns: 20% 80%;
            grid-template-areas: 
            "header header"
            "scroll-vertical main-up"
            "scroll-vertical feed"
            "scroll-vertical feed"
            "footer footer"
            ;
        }
        header{
            grid-area: header;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80%;
        }
        header #about{
            margin-right: 75px;
            text-decoration: none;
            padding: 8px 5px;
            border: 2px solid #4F3E6A;
            box-sizing: border-box;
            border-radius: 20px;
            transition: all .3s ease;
        }
        #about:hover{
            background: #4F3E6A ;
            color: white;
        }
        .scroll-vertical{
            grid-area: scroll-vertical;
            margin: 0 auto;
            align-items: center;
            margin-top: 30px;
        }
        .container a{
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 6px;
        }
        .container{
            background: #D9D2D7;
            height: 321px;
            width: 107px;
            border-radius: 40px;
        }
        #main-up{
            grid-area: main-up;
        }
        .feed{
            grid-area: feed;
        }
        .feed{
            margin-top: 2%;
            padding: 0 auto;
            position: absolute;
            width: 600px;
            height: 250px;
            overflow-y: scroll;
            background: #D9D2D7;
            border-radius: 20px;
        }
        footer{
            background: white;
            border: 0;
            grid-area: footer;
            bottom: 0;
            width: 100%;
            margin-top: 85px;
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
        }
        .direito{
            margin-right: 8%;
        }
        .social-media{
            padding-bottom: 5px;
            margin-left: 5px;
        }
        .image-placeholder {
            background-color: #eee;
            display: flex;
            height: 180px;
            margin: 5px;
            align-self: center;
            width: 240px;
            border-radius: 20px;
        }
        .dashboard{
            display: flex;
            align-content: center;
            justify-content: space-between;
        }
        .text-dash{
            align-self:flex-start;
            justify-self: justify;
            margin-top: 10px;
			
        }
        .image-placeholder > h4 {
            align-self: center;
            text-align: center;
            width: 100%;
        }
    </style>
</body>
<script src="../js/jquery-3.5.1.min.js"></script>
<script>
 

 
 $(function(){
           
  $(document).ready(function(){            
                                      
    var atualizar= setInterval(function(){
                                                                       
     $("#setTime").load("atualiza.php");
                                                                           
    }, 1500000);
    return false;
   });           
   });
 </script>
 
<!-- <div class="dashboard">
                <div class="image-placeholder">
                    <h4>image placeholder text</h4>
                </div>
                <div class="text-dash">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id elit dolor. <br> Donec sit amet justo eget metus congue vehicula.</p>
                </div>
            </div>
            <?=date("H:i:s");?>-->
</html>