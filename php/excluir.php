<?php
include 'buscar.php';
// GET mostra a confirmação. A exclusão só acontece com POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conexao->prepare('DELETE FROM times WHERE id = ?');
    $stmt->execute([$id]);
    header('Location: listar.php');
    exit;
}
include 'cabecalho.php';
?>
<section class="cartao mensagem">
  <p class="etiqueta">MEUS TIMES</p>
  <h1>Excluir time?</h1>
  <p>Você está prestes a excluir <strong><?php echo htmlspecialchars($time['nome']); ?></strong>.</p>
  <p>Essa ação não pode ser desfeita.</p>
  <form action="excluir.php" method="post" class="acoes">
    <input type="hidden" name="id" value="<?php echo $time['id']; ?>">
    <a class="botao secundario" href="listar.php">Manter time</a>
    <button class="botao perigo" type="submit">Confirmar exclusão</button>
  </form>
</section>
<?php include 'rodape.php'; ?>
