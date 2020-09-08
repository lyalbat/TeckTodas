<?php include ("header.php");?>
<div class="row">
<div class="col align-self-end">
	
    <form class="col-md-6 offset-md-6" method="post" action="../php/log_mulher.php">
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
<?php include ("footer.php");?>