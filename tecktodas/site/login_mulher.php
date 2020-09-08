<head>
<title>Cadastro Mulheres</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<div class="page-container">
<div id = "content-wrap">
<?php include ("header.php");?>
<div class="container">
<div class="row">
<div id = "col-6 col-md-6=">
  <img class="gato" src="imagens/gato.png" alt="Garota sentada com um gato ao colo.">
</div>
    <form class="col-6 cold-md-6" method="post" action="../php/log_mulher.php">
    <h2>Mulheres</h2>
    <div class="caixa_form">
      <div class="form-group">
        <label for="cpf">CPF</label><small>*</small>
        <input type="text" required class="form-control" name="cpf" id="cpf" >    
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label><small>*</small>
        <input type="password" required name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-warning">Avançar</button>
      </div>
    </form>
</div>
</div>
</div>

<?php include ("footer.php");?>
<style>
  h2{
	  margin:30px;
    border-bottom: 2px solid #AAA9A9;
	  color: #AAA9A9;
  }
  .caixa_form{
    padding: 10px 31px 10px 31px;
    background:#E5E5E5;
    border-radius: 20px; 
  }
  .gato{
	  margin-top:70px;
	  max-width:500px;
	  margin-right:20px;
  }
  /*  #imagem{
      padding-bottom: 10%;
      max-height: 700px;
      max-width:600px;
    }*/
    /*#footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2.5rem;            /* Footer height */
    body{
        background: #4F3E6A;
    }
</style>
</div>