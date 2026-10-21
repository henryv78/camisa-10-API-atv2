<?php
include 'conexao.php';
// O id vem da URL para a edição/consulta ou do formulário para a exclusão.
$id = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && is_scalar($_POST['id'])) {
    $id = (int) $_POST['id'];
} elseif (isset($_GET['id']) && is_scalar($_GET['id'])) {
    $id = (int) $_GET['id'];
}
$stmt = $conexao->prepare('SELECT * FROM times WHERE id = ?');
$stmt->execute([$id]);
$time = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$time) {
    http_response_code(404);
    include 'cabecalho.php';
    echo '<section class="cartao mensagem"><h1>Time não encontrado.</h1>';
    echo '<p>Essa escalação pode ter sido excluída.</p>';
    echo '<a class="botao escuro" href="listar.php">Voltar aos times</a></section>';
    include 'rodape.php';
    exit;
}
?>
