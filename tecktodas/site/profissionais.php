 <?php include ("../integracao/php/conn.php");
 
 $sqlposts = "SELECT * FROM cad_mulher WHERE status != 'I'";
 
 $query_post = mysql_query($sqlposts);
 
 while($dados = mysql_fetch_array($query_post)){
 
 ?>
 <div class="container-fluid">
 <div class="row">
    <div class="col-4">
    <div  class="image-placeholder">
        <img src="../imagens/female-and-male.jpg"  width="120px" alt="Logo" class="">
        
    </div>
    </div>
    <div class="col-8">
    <div class="text-dash ">
        <p>Nome: <?=utf8_encode($dados['nome']). ' ' .utf8_encode($dados['sobrenome']);?><br><small><?= utf8_encode($dados['email']);?></small><br></p>
    </div>
</div>
</div>
</div>
<?php
 }
 ?>