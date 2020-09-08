<?php include ("header.php");?>
<div class="page-container">
<div id = "content-wrap">

<div class="container">
<div class="row">
<div class = " col-sm-12 col-md-12  col-lg-6 col-xl-6">
  <img class="gato img-fluid" src="imagens/gato.png" alt="Garota sentada com um gato ao colo.">
</div>
    <form class="col-sm-12 col-md-12  col-lg-6 col-xl-6" method="post" action="../php/cad_empresa.php">
    <h2>Empresas</h2>
    <div class="caixa_form">
      <div class="form-group" style="padding-top:20px;">
        <label for="cnpj">CNPJ</label><small>*</small>
        <input type="text" required class="form-control" name="cnpj" id="cnpj" >
      </div>
      <div class="form-group">
        <label for="nomeempresa">Nome da Empresa</label><small>*</small>
        <input type="text" required class="form-control" name="nomeempresa" id="nomeempresa" aria-describedby="nomeEMpresa" >
        <small id="nomeEMpresa" class="form-text text-muted">Razão social ou nome fantasia </small>
      </div>
      <div class="form-group">
        <label for="representante">Representante</label><small>*</small>
        <input type="text" required class="form-control" name="representante" id="representante" aria-describedby="nomeRepresentante">
        <small id="nomeRepresentante" class="form-text text-muted">Quem será o contato</small>
      </div>
      <div class="form-group">
        <label for="telefone">Whatsapp</label><small>*</small>
        <input type="text"  class="form-control" name="telefone" id="telefone" >
        
      </div>
      <div class="form-group">
        <label for="cpf">E-mail</label><small>*</small>
        <input type="email" required class="form-control" name="email" id="email" >
        
      </div>
      <div class="row">
    <div class="col-lg-4">
        <label for="cpf">Estado</label><small>*</small>
        <select required class="form-control" name="estado" id="estado" >
        	<option selected="" value="">[selecione]</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
        </select>
        </div>
        <div class="col-lg-8">
      
        <label for="cpf">Cidade</label><small>*</small>
        <input type="text" required class="form-control" name="cidade" id="cidade" >
       </div> 
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label><small>*</small>
        <input type="password" required name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword">Confirmar Senha</label><small>*</small>
        <input type="password" required name="confsenha" class="form-control" id="exampleInputPassword2">
      </div>
      
      <button type="submit" class="btn-toolbarx">Avançar</button>
      </div>
    </form>
</div>
</div>

</div>
<?php include ("footer.php");?>
</div>

</body>
</html>