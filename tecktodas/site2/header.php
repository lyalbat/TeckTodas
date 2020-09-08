<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teck Todas</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../imagens/ic1.jfif">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer/">
    
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

<style>
        * {box-sizing: border-box;}
        
        body { 
          margin: 0;
          font-family: "Robot", sans-serif;
        }
        .btn-abt{
            background: #4F3E6A;
            border-radius: 20px;
            color: white !important;
            border: 4px solid #4F3E6A;
            padding-right: auto !important;
        }
        .btn-parc{
            border: 2px solid #4F3E6A !important;
            background: white;
            display: block;
            box-sizing: border-box;
        }
        .header {
          overflow: hidden;
          background-color: white;
          padding: 0 30px;
          max-height: max-content;
          box-sizing: border-box;
          max-height: 60%;
          border-radius: 5px;
        }
        .header a {
          margin-right: 7px;
          border-radius: 20px;
          float: left;
          border: 4px;
          color: #4F3E6A;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 16px; 
          line-height: 0.8rm;
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap-reverse;

        }
        .header-right{
            padding-top: 35px;
        }
        .header a:hover {
          background-color: #4F3E6A;
          color: white;
        }

        .header-right {
          float: right;
        }
        .logo{
            max-height: 70%;
        }
        /*@media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          
          .header-right {
            float: none;
          }
        }*/
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
	border: 4px solid #F0844D ;
    background-color: #F0844D; 
	padding: 10px 40px;
    
    border-radius: 30px;
    margin-top: 40%;
    margin: 10px;
    color: white; 
    cursor: pointer;
    display: block;
}

  
.btn-toolbar:not(:last-child) {
    border-bottom: none;
}
.btn-toolbar:hover {
    background-color: #fc6215;
    border: 4px solid #fc6215;
}
h2{
	margin:30px;
    border-bottom: 2px solid #AAA9A9;
	color: #AAA9A9;
  }
  .caixa_form{
    padding: 10px 31px 10px 31px;
    background:#E5E5E5;
    border-radius: 20px; 
	color:#4F3E6A;
  }
  .gato{
	  margin-top:70px;
	  max-width:500px;
	  margin-right:20px;
  }
       
</style>
</head>
<body>
<div class="page-container">
<div id = "content-wrap">

    <nav>
    <ul class="menu"> 
        <li class="logo"><a href="#"><img src="../site/imagens/logo.png" alt="logo da TeckTodas"></a></li>
        <li class="item"><a href="#">Sobre Nós</a></li>
        <li class="item button secondary"><a href="#">Quero fazer parceria</a></li>
        <li class="item button"><a href="#">Cadastre-se</a></li>
        <li class="toggle"><span class="bars"></span></li>
    </ul>
    </nav>