<title>Informações Profissionais</title>
<div class="page-container">
    <div id="content-wrap">
        <?php include ("header.php");?>
        <div class="main">
        <div class="scroll-vertical">
            <div class="container">
                <a href="#" ><i class="fa fa-user fa-2x" aria-hidden="true" id="vert-icon"></i><p>Perfil</p></a>
                <a href="#" ><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i><p>Vagas</p></a>
                <a href="#" ><i class="fa fa-comments fa-2x" aria-hidden="true"></i><p>Comunidade</p></a>
                <a href="#" ><i class="fa fa-play-circle-o fa-2x" aria-hidden="true"></i><p>Mentorias</p></a>
                <a href="#"><i class="fa fa-cog fa-2x" aria-hidden="true" id="vert-icon"></i><p>Configurações</p></a>
                <a href="../php/sair.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true" id="vert-icon"></i><p>Sair</p></a>
        </div>
        <div class="dash">
            <div class="opcoes">
                <ul class="info">
                    <li id="txt"><a href="">Experiência</a></li>
                    <li id="txt"><a href="">Formação Acadêmica/Cursos</a></li>
                </ul>
        </div> 
        <div class="btn-group">
            <button><a href=""><i class="fa fa-plus" aria-hidden="true"></i></a></button>
            <button><a href=""><i class="fa fa-plus" aria-hidden="true"></i></a></button>
        </div>
    </div>
</div>
    <style>
        #page-container {
            position: relative;
            background: #4F3E6A;
            min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 2.5rem;    /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 3rem;            /* Footer height */
        }
        body{
            background: #4F3E6A;
        }
        .main{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }
        .opcoes{
            width: 50%;
            height: 50%;
            top: 25%;
            margin: 0 auto;
            position: relative;
            background:#E5E5E5;
        }
        .btn-group{
            margin-top: 70%;
        }
        .btn-group button {
          line-height: 1;;
          background: transparent; /* Green background */
          border: 1px solid #4F3E6A;; /* Green border */
          color: #4F3E6A;; /* White text */
          padding: 3px 9px; /* Some padding */
          cursor: pointer; /* Pointer/hand icon */
          height: 30px;
          display: block; /* Make the buttons appear below each other */
          margin-bottom: 12px;
          border-radius: 80px;
        }
        ul{
            margin-right: 20%;
            margin-top:33%;
            list-style: none;
        }
        a{
            text-decoration: none;
            font-weight: bold;
        }
        #txt{
            margin-bottom: 22px;
            
        }
        ul .info{
            margin: 0;
            padding: 0;
        }
        .scroll-vertical{
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
            height: 340px;
            width: 110px;
            border-radius: 40px;
        }
        </style>
        </div>
    </div>
 <?php include ("footer.php");?>
</div>