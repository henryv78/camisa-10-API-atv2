<?php
// $_POST recebe o formulário. Não há requisição JavaScript.
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../index.html');
    exit;
}
include 'opcoes.php';
$nome = '';
if (isset($_POST['nome']) && is_string($_POST['nome'])) {
    $nome = trim($_POST['nome']);
}
$erro = '';
if ($nome == '') {
    $erro = 'Preencha o nome do time.';
}
// Os valores ficam na mesma ordem dos parâmetros ? do SQL.
$valores = [$nome];
foreach ($opcoes as $campo => $jogadores) {
    if (!isset($_POST[$campo]) || !in_array($_POST[$campo], $jogadores, true)) {
        $erro = 'Escolha um jogador válido para cada uma das onze posições.';
    } else {
        $valores[] = $_POST[$campo];
    }
}
if ($erro != '') {
    http_response_code(422);
    include 'cabecalho.php';
    echo '<section class="cartao mensagem"><h1>Falta um detalhe.</h1>';
    echo '<p>' . htmlspecialchars($erro) . '</p>';
    echo '<p>Use o botão Voltar do navegador para corrigir o formulário.</p></section>';
    include 'rodape.php';
    exit;
}
?>
