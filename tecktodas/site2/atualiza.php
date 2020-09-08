 <?php include ("../integracao/php/conn.php");
 
 $sqlposts = "SELECT * FROM postagens LEFT JOIN 
 cad_mulher ON cad_mulher.id_cad = postagens.id_mulher
 WHERE status_post !='I' and cad_mulher.status!='I' order by id_post desc";
 
 $query_post = mysql_query($sqlposts);
 
 while($dados = mysql_fetch_array($query_post)){
 
 ?>
 <div class="dashboard ">
    <div  class="image-placeholder ">
        <img src="../imagens/logo.png" alt="Logo" class="img_mulher">
        
    </div>
    <div class="text-dash ">
        <p><?=utf8_encode($dados['conteudo']);?><br><small>Por: <?=utf8_encode($dados['nome']);?></small></p>
    </div>
</div>
<?php
 }
 ?>