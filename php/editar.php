<?php
include 'buscar.php';
include 'cabecalho.php';
?>
<section class="abertura">
  <div><p class="etiqueta">AJUSTE SUA ESCALAÇÃO</p><h1>Uma mudança.<br><em>Outro jogo.</em></h1></div>
  <p class="descricao">Troque os nomes que quiser e salve as alterações neste mesmo time.</p>
</section>
<form action="atualizar.php" method="post" class="montagem">
  <input type="hidden" name="id" value="<?php echo $time['id']; ?>">
  <section class="prancheta" aria-label="Campo e jogadores">
    <div class="topo-campo"><div><p class="etiqueta">PRANCHETA TÁTICA</p><h2 id="nome-no-campo"><?php echo htmlspecialchars($time['nome']); ?></h2></div><span class="esquema">4–3–3</span></div>
    <div class="campo">
      <div class="linha linha-0">
        <div class="posicao">
          <span class="numero">1</span>
          <label for="ponta_esquerda">PE</label>
          <select class="jogador" id="ponta_esquerda" name="ponta_esquerda" aria-label="Ponta esquerda" required>
            <option value="">Escolher</option>
            <option value="Vini Jr." <?php if ($time['ponta_esquerda'] == 'Vini Jr.') { echo 'selected'; } ?>>Vini Jr.</option>
            <option value="Neymar" <?php if ($time['ponta_esquerda'] == 'Neymar') { echo 'selected'; } ?>>Neymar</option>
            <option value="Rafael Leão" <?php if ($time['ponta_esquerda'] == 'Rafael Leão') { echo 'selected'; } ?>>Rafael Leão</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['ponta_esquerda']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">2</span>
          <label for="centroavante">CA</label>
          <select class="jogador" id="centroavante" name="centroavante" aria-label="Centroavante" required>
            <option value="">Escolher</option>
            <option value="Haaland" <?php if ($time['centroavante'] == 'Haaland') { echo 'selected'; } ?>>Haaland</option>
            <option value="Harry Kane" <?php if ($time['centroavante'] == 'Harry Kane') { echo 'selected'; } ?>>Harry Kane</option>
            <option value="Lautaro Martínez" <?php if ($time['centroavante'] == 'Lautaro Martínez') { echo 'selected'; } ?>>Lautaro Martínez</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['centroavante']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">3</span>
          <label for="ponta_direita">PD</label>
          <select class="jogador" id="ponta_direita" name="ponta_direita" aria-label="Ponta direita" required>
            <option value="">Escolher</option>
            <option value="Salah" <?php if ($time['ponta_direita'] == 'Salah') { echo 'selected'; } ?>>Salah</option>
            <option value="Saka" <?php if ($time['ponta_direita'] == 'Saka') { echo 'selected'; } ?>>Saka</option>
            <option value="Raphinha" <?php if ($time['ponta_direita'] == 'Raphinha') { echo 'selected'; } ?>>Raphinha</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['ponta_direita']); ?></span>
        </div>
      </div>
      <div class="linha linha-1">
        <div class="posicao">
          <span class="numero">4</span>
          <label for="meia_esquerda">MEI</label>
          <select class="jogador" id="meia_esquerda" name="meia_esquerda" aria-label="Meia pela esquerda" required>
            <option value="">Escolher</option>
            <option value="Bellingham" <?php if ($time['meia_esquerda'] == 'Bellingham') { echo 'selected'; } ?>>Bellingham</option>
            <option value="Pedri" <?php if ($time['meia_esquerda'] == 'Pedri') { echo 'selected'; } ?>>Pedri</option>
            <option value="Musiala" <?php if ($time['meia_esquerda'] == 'Musiala') { echo 'selected'; } ?>>Musiala</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['meia_esquerda']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">5</span>
          <label for="volante">VOL</label>
          <select class="jogador" id="volante" name="volante" aria-label="Volante" required>
            <option value="">Escolher</option>
            <option value="Rodri" <?php if ($time['volante'] == 'Rodri') { echo 'selected'; } ?>>Rodri</option>
            <option value="Casemiro" <?php if ($time['volante'] == 'Casemiro') { echo 'selected'; } ?>>Casemiro</option>
            <option value="Declan Rice" <?php if ($time['volante'] == 'Declan Rice') { echo 'selected'; } ?>>Declan Rice</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['volante']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">6</span>
          <label for="meia_direita">MEI</label>
          <select class="jogador" id="meia_direita" name="meia_direita" aria-label="Meia pela direita" required>
            <option value="">Escolher</option>
            <option value="De Bruyne" <?php if ($time['meia_direita'] == 'De Bruyne') { echo 'selected'; } ?>>De Bruyne</option>
            <option value="Bruno Fernandes" <?php if ($time['meia_direita'] == 'Bruno Fernandes') { echo 'selected'; } ?>>Bruno Fernandes</option>
            <option value="Valverde" <?php if ($time['meia_direita'] == 'Valverde') { echo 'selected'; } ?>>Valverde</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['meia_direita']); ?></span>
        </div>
      </div>
      <div class="linha linha-2">
        <div class="posicao">
          <span class="numero">7</span>
          <label for="lateral_esquerdo">LE</label>
          <select class="jogador" id="lateral_esquerdo" name="lateral_esquerdo" aria-label="Lateral esquerdo" required>
            <option value="">Escolher</option>
            <option value="Theo Hernández" <?php if ($time['lateral_esquerdo'] == 'Theo Hernández') { echo 'selected'; } ?>>Theo Hernández</option>
            <option value="Alphonso Davies" <?php if ($time['lateral_esquerdo'] == 'Alphonso Davies') { echo 'selected'; } ?>>Alphonso Davies</option>
            <option value="Robertson" <?php if ($time['lateral_esquerdo'] == 'Robertson') { echo 'selected'; } ?>>Robertson</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['lateral_esquerdo']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">8</span>
          <label for="zagueiro_esquerdo">ZAG</label>
          <select class="jogador" id="zagueiro_esquerdo" name="zagueiro_esquerdo" aria-label="Zagueiro pela esquerda" required>
            <option value="">Escolher</option>
            <option value="Van Dijk" <?php if ($time['zagueiro_esquerdo'] == 'Van Dijk') { echo 'selected'; } ?>>Van Dijk</option>
            <option value="Gabriel Magalhães" <?php if ($time['zagueiro_esquerdo'] == 'Gabriel Magalhães') { echo 'selected'; } ?>>Gabriel Magalhães</option>
            <option value="Bastoni" <?php if ($time['zagueiro_esquerdo'] == 'Bastoni') { echo 'selected'; } ?>>Bastoni</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['zagueiro_esquerdo']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">9</span>
          <label for="zagueiro_direito">ZAG</label>
          <select class="jogador" id="zagueiro_direito" name="zagueiro_direito" aria-label="Zagueiro pela direita" required>
            <option value="">Escolher</option>
            <option value="Marquinhos" <?php if ($time['zagueiro_direito'] == 'Marquinhos') { echo 'selected'; } ?>>Marquinhos</option>
            <option value="Rúben Dias" <?php if ($time['zagueiro_direito'] == 'Rúben Dias') { echo 'selected'; } ?>>Rúben Dias</option>
            <option value="Saliba" <?php if ($time['zagueiro_direito'] == 'Saliba') { echo 'selected'; } ?>>Saliba</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['zagueiro_direito']); ?></span>
        </div>
        <div class="posicao">
          <span class="numero">10</span>
          <label for="lateral_direito">LD</label>
          <select class="jogador" id="lateral_direito" name="lateral_direito" aria-label="Lateral direito" required>
            <option value="">Escolher</option>
            <option value="Hakimi" <?php if ($time['lateral_direito'] == 'Hakimi') { echo 'selected'; } ?>>Hakimi</option>
            <option value="Carvajal" <?php if ($time['lateral_direito'] == 'Carvajal') { echo 'selected'; } ?>>Carvajal</option>
            <option value="Alexander-Arnold" <?php if ($time['lateral_direito'] == 'Alexander-Arnold') { echo 'selected'; } ?>>Alexander-Arnold</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['lateral_direito']); ?></span>
        </div>
      </div>
      <div class="linha linha-3">
        <div class="posicao">
          <span class="numero">11</span>
          <label for="goleiro">GOL</label>
          <select class="jogador" id="goleiro" name="goleiro" aria-label="Goleiro" required>
            <option value="">Escolher</option>
            <option value="Alisson" <?php if ($time['goleiro'] == 'Alisson') { echo 'selected'; } ?>>Alisson</option>
            <option value="Ederson" <?php if ($time['goleiro'] == 'Ederson') { echo 'selected'; } ?>>Ederson</option>
            <option value="Courtois" <?php if ($time['goleiro'] == 'Courtois') { echo 'selected'; } ?>>Courtois</option>
          </select>
          <span class="nome-jogador"><?php echo htmlspecialchars($time['goleiro']); ?></span>
        </div>
      </div>
    </div>
    <p class="base-campo">Três opções por posição. Onze decisões suas.</p>
  </section>
  <aside class="painel">
    <section class="cartao">
      <p class="etiqueta">SUA IDENTIDADE</p>
      <label for="nome">Nome do time</label>
      <input type="text" id="nome" name="nome" maxlength="60" placeholder="Ex.: Timão dos Sonhos" value="<?php echo htmlspecialchars($time['nome']); ?>" required>
      <div class="placar"><span id="quantidade">11</span><span>/ 11<small>JOGADORES ESCOLHIDOS</small></span></div>
      <p class="aviso" id="situacao">Escolha um jogador em cada posição.</p>
      <button type="submit" class="botao principal">Salvar alterações ↗</button>
      <a class="link-painel" href="listar.php">Ver meus times</a>
    </section>
    <section class="dica"><p class="etiqueta">DICA DO VESTIÁRIO</p><h2>Camisa pesada.<br>Escolha consciente.</h2><p>Monte um time com a sua cara. Você pode mudar as escolhas antes de salvar.</p></section>
  </aside>
</form>
<?php include 'rodape.php'; ?>
