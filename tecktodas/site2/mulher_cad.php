<?php include ("header.php");?>
<div class="row">
<div class="col align-self-end">
	
    <form class="col-md-6 offset-md-6" method="post" action="../php/cad_mulher.php">
    <h2>Mulheres</h2>
    
    <div class="caixa_form">
      <div class="form-group">
        <label for="nome">Nome</label><small>*</small>
        <input type="text" required class="form-control" name="nome" id="nome" aria-describedby="nomeHelp">
        <small id="nomeHelp" class="form-text text-muted">Nome social</small>
      </div>
      <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" >
        
      </div>
      <div class="form-group">
        <label for="Email">E-mail</label><small>*</small>
        <input type="text" required class="form-control" name="email" id="email" >
        
      </div>
      <div class="form-group">
        <label for="telefone">Whatsapp</label>
        <input type="text"  class="form-control" name="telefone" id="telefone" >
        
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label><small>*</small>
        <input type="text" required class="form-control" name="cpf" id="cpf" >
        
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label><small>*</small>
        <input type="password" required name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword">Confirmar Senha</label><small>*</small>
        <input type="password" required name="confsenha" class="form-control" id="exampleInputPassword2">
      </div>
      
      <button type="submit" class="btn btn-warning">Avançar</button>
      </div>
    </form>
</div>
</div>
<?php include ("footer.php");?>