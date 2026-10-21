<?php
include 'validar.php';
include 'conexao.php';
// CREATE: parâmetros preparados, conforme a página 13 da apostila.
try {
    $stmt = $conexao->prepare('INSERT INTO times (nome, ponta_esquerda, centroavante, ponta_direita, meia_esquerda, volante, meia_direita, lateral_esquerdo, zagueiro_esquerdo, zagueiro_direito, lateral_direito, goleiro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute($valores);
    header('Location: listar.php');
    exit;
} catch (PDOException $erro) {
    include 'erro.php';
}
?>
