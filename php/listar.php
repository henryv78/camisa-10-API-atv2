<?php
include 'conexao.php';
// READ: consulta os times e mostra o resultado como HTML.
$stmt = $conexao->query('SELECT * FROM times ORDER BY id DESC');
$times = $stmt->fetchAll(PDO::FETCH_ASSOC);
include 'cabecalho.php';
?>
<section class="abertura">
  <div><p class="etiqueta">SUA COLEÇÃO DE ESCALAÇÕES</p><h1>O clube<br><em>é seu.</em></h1></div>
  <p class="descricao">Confira seus times, ajuste os jogadores ou abra espaço para uma nova ideia.</p>
</section>
<p><a class="botao escuro" href="../index.html">Novo draft +</a></p>
<section class="lista-times acoes">
<?php if (count($times) == 0) { ?>
  <article class="cartao"><h2>Seu primeiro time está esperando.</h2><p>Monte as onze posições e salve sua escalação.</p></article>
<?php } ?>
<?php foreach ($times as $time) { ?>
  <article class="cartao time-salvo">
    <p class="etiqueta">4–3–3 / ONZE TITULAR</p>
    <h2><?php echo htmlspecialchars($time['nome']); ?></h2>
    <ul>
      <li><span>PE</span><?php echo htmlspecialchars($time['ponta_esquerda']); ?></li>
      <li><span>CA</span><?php echo htmlspecialchars($time['centroavante']); ?></li>
      <li><span>PD</span><?php echo htmlspecialchars($time['ponta_direita']); ?></li>
      <li><span>MEI</span><?php echo htmlspecialchars($time['meia_esquerda']); ?></li>
      <li><span>VOL</span><?php echo htmlspecialchars($time['volante']); ?></li>
      <li><span>MEI</span><?php echo htmlspecialchars($time['meia_direita']); ?></li>
      <li><span>LE</span><?php echo htmlspecialchars($time['lateral_esquerdo']); ?></li>
      <li><span>ZAG</span><?php echo htmlspecialchars($time['zagueiro_esquerdo']); ?></li>
      <li><span>ZAG</span><?php echo htmlspecialchars($time['zagueiro_direito']); ?></li>
      <li><span>LD</span><?php echo htmlspecialchars($time['lateral_direito']); ?></li>
      <li><span>GOL</span><?php echo htmlspecialchars($time['goleiro']); ?></li>
    </ul>
    <div class="acoes">
      <a class="botao escuro" href="editar.php?id=<?php echo $time['id']; ?>">Editar ↗</a>
      <a class="botao secundario" href="excluir.php?id=<?php echo $time['id']; ?>">Excluir</a>
    </div>
  </article>
<?php } ?>
</section>
<?php include 'rodape.php'; ?>
