// Conteúdo da apostila: seleção de elementos, eventos e alteração do DOM.
const nome = document.querySelector('#nome');
const titulo = document.querySelector('#nome-no-campo');
const jogadores = document.querySelectorAll('.jogador');
const nomesNoCampo = document.querySelectorAll('.nome-jogador');
const quantidade = document.querySelector('#quantidade');
const situacao = document.querySelector('#situacao');

// O if evita executar este trecho nas páginas que não têm o formulário.
if (nome) {
  nome.addEventListener('input', function () {
    titulo.textContent = nome.value;
    if (nome.value == '') {
      titulo.textContent = 'Meu onze ideal';
    }
  });

  function atualizarCampo() {
    let total = 0;

    // O for percorre as onze listas de jogadores.
    for (let i = 0; i < jogadores.length; i++) {
      if (jogadores[i].value != '') {
        nomesNoCampo[i].textContent = jogadores[i].value;
        nomesNoCampo[i].classList.add('escalado');
        total = total + 1;
      } else {
        nomesNoCampo[i].textContent = 'Camisa disponível';
        nomesNoCampo[i].classList.remove('escalado');
      }
    }

    quantidade.textContent = total;
    situacao.textContent = 'Escolha um jogador em cada posição.';
    if (total == 11) {
      situacao.textContent = 'Time completo! Dê um nome e salve.';
    }
  }

  for (let i = 0; i < jogadores.length; i++) {
    jogadores[i].addEventListener('change', atualizarCampo);
  }

  // Também mostra a escalação quando abrimos a página de edição.
  atualizarCampo();
}


// Busca jogadores na API pública TheSportsDB.
const formularioBusca = document.querySelector('#form-busca-jogador');
if (formularioBusca) {
  formularioBusca.addEventListener('submit', async function (evento) {
    evento.preventDefault();
    const consulta = document.querySelector('#nome-jogador-api').value.trim();
    const mensagemApi = document.querySelector('#mensagem-api');
    const resultadoApi = document.querySelector('#resultado-api');
    resultadoApi.textContent = '';

    if (!consulta) {
      mensagemApi.textContent = 'Digite o nome de um jogador para pesquisar.';
      return;
    }

    mensagemApi.textContent = 'Buscando jogador...';
    try {
      const resposta = await fetch(`https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=${encodeURIComponent(consulta)}`);
      if (!resposta.ok) throw new Error('Falha na requisição');
      const dados = await resposta.json();
      const jogadoresEncontrados = dados.player;

      if (!jogadoresEncontrados || jogadoresEncontrados.length === 0) {
        mensagemApi.textContent = 'Nenhum jogador encontrado. Confira o nome e tente novamente.';
        return;
      }

      mensagemApi.textContent = 'Resultado da busca:';
      jogadoresEncontrados.slice(0, 5).forEach(function (jogador) {
        const cartao = document.createElement('article');
        cartao.className = 'item-resultado';
        const nomeJogador = document.createElement('h3');
        nomeJogador.textContent = jogador.strPlayer || 'Nome indisponível';
        const detalhes = document.createElement('p');
        detalhes.textContent = [jogador.strTeam, jogador.strNationality, jogador.strSport]
          .filter(Boolean).join(' · ') || 'Informações adicionais indisponíveis.';
        cartao.append(nomeJogador, detalhes);
        resultadoApi.appendChild(cartao);
      });
    } catch (erro) {
      mensagemApi.textContent = 'Não foi possível consultar a API agora. Verifique sua conexão e tente novamente.';
    }
  });
}
