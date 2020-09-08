<html>
<head>
</head>
<body>

    <div class="header">
        <img class= "logo" src="imagens/logo.png" alt="Logo da Teck Todas">
        <div class="header-right">
          <a class="sobre" href="#">Sobre Nós</a>
          <a href="#" class="btn-parc">Quero fazer parceria</a>
          <a href="empresa_cadastro.php" class="btn-abt">Cadastro Empresas</a>
        </div>
      </div>
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
        </style>
