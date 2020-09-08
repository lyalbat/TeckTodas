
<?php include ("header.php");?>

<div class="container">
<div class="row">
<div class = " col-sm-12 col-md-12  col-lg-6 col-xl-6">
  <img class="gato img-fluid" src="imagens/gato.png" alt="Garota sentada com um gato ao colo.">
</div>
    <form class="col-sm-12 col-md-12  col-lg-6 col-xl-6" method="post" action="../php/log_empresa.php">
    <h2>Empresas</h2>
    <div class="caixa_form">
      <div class="form-group" style="padding-top:20px;">
        <label for="email">E-mail</label><small>*</small>
        <input type="email" required class="form-control" name="email" id="email" >    
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label><small>*</small>
        <input type="password" required name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn-toolbarx">Avançar</button>
      </div>
    </form>
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
