<?php
include 'validar.php';
include 'buscar.php';
// UPDATE: mantém o id do registro e altera os dados do time.
$valores[] = $id;
try {
    $stmt = $conexao->prepare('UPDATE times SET nome = ?, ponta_esquerda = ?, centroavante = ?, ponta_direita = ?, meia_esquerda = ?, volante = ?, meia_direita = ?, lateral_esquerdo = ?, zagueiro_esquerdo = ?, zagueiro_direito = ?, lateral_direito = ?, goleiro = ? WHERE id = ?');
    $stmt->execute($valores);
    header('Location: listar.php');
    exit;
} catch (PDOException $erro) {
    include 'erro.php';
}
?>
