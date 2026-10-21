<?php
http_response_code(500);
include 'cabecalho.php';
echo '<section class="cartao mensagem"><h1>Não foi possível salvar.</h1>';
echo '<p>Confira se você importou o banco desta versão e se o nome não é muito longo.</p>';
echo '<p>Use Voltar no navegador para manter e revisar os dados preenchidos.</p></section>';
include 'rodape.php';
?>
