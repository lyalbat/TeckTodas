<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer/">
    
<title>Home</title>
</head>
<body>
<div class="page-container">
<div id = "content-wrap">
<?php include ("header_old.php");?>
<div class="banner">
    <div class="app-img">
        <img src="../imagens/girl-home.png" alt="Duas garotas segurando telefones celulares.">
    </div>
    <div class="btn-toolbar">
        <button onClick='window.location.href = "login_empresa.php";' class="bot-lar">Entrar como empresa</button>
        <button onClick='window.location.href = "login_mulher.php";' class="bot-lar">Sou profissional de TI</button>
    </div>
</div>
<style>
    #page-container {
    position: relative;
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
    .banner{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 5% 95%;
        grid-template-areas:
        "banner btn-toolbar";
        align-items: space-around;
    }
    .app-img{
        grid-area: banner;
        grid-row: 2/3;
    }
    .app-img img{
        max-height: 100%;
        max-width: 80%;
        margin-left: 15%;
        margin-top: 3%;
    }
    .btn-toolbar{
    grid-area: btn-toolbar;
    grid-row: 2/3;
    display:block;
    justify-items: right;
    align-items:center;
    margin-left: 15%;
    margin-top: 10%;
}
.btn-toolbar button{
    padding: 20px 60px;
    border: 4px solid #F0844D ;
    background-color: #F0844D; 
    border-radius: 10px;
    margin-top: 40%;
    margin: 10px;
    color: white; 
    cursor: pointer;
    display: block;
  }
  
.btn-toolbar button:not(:last-child) {
    border-bottom: none;
}
.btn-toolbar button:hover {
    background-color: #fc6215;
    border: 4px solid #fc6215;
}
</style>
</div>
<?php include ("footer.php");?>
</div>
</body>
</html>