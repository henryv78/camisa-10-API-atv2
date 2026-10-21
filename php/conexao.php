<?php
// Página 13 da apostila: conexão com PDO.
// No XAMPP, confira usuário e senha do seu MySQL.
try {
    $conexao = new PDO("mysql:host=localhost;dbname=camisa_10_basico;charset=utf8mb4", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    http_response_code(500);
    include 'cabecalho.php';
    echo '<section class="cartao mensagem"><h1>Confira o banco.</h1>';
    echo '<p>Ative o MySQL no XAMPP, importe sql/banco.sql e confira php/conexao.php.</p>';
    echo '<a class="botao escuro" href="../index.html">Voltar ao draft</a></section>';
    include 'rodape.php';
    exit;
}
?>
