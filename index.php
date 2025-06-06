<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colégio Sanquim</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="layout">
    <nav class="sidebar">
      <img src="img/logo.webp" alt="Logo Colégio Sanquim" class="logo-img">
      
      <button onclick="showContent('materiais')" class="nav-button">
        <img src="img/materiais.svg" alt="Materiais" class="icon-img">
        <span>Materiais</span>
      </button>
      
      <button onclick="showContent('faltas')" class="nav-button">
        <img src="img/faltas.svg" alt="Faltas" class="icon-img">
        <span>Faltas</span>
      </button>
      
      <button onclick="showContent('notas')" class="nav-button">
        <img src="img/notas.svg" alt="Notas" class="icon-img">
        <span>Notas</span>
      </button>
      
      <button onclick="showContent('horarios')" class="nav-button">
        <img src="img/horarios.svg" alt="Horários" class="icon-img">
        <span>Horários</span>
      </button>
    </nav>

    <main class="content" id="main-content">
      <p>Selecione uma seção no menu à esquerda.</p>
    </main>
  </div>

  <script>
    function showContent(section) {
      const mainContent = document.getElementById('main-content');
      mainContent.innerHTML = '<p>Carregando...</p>';

      fetch(`${section}.html`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Erro ao carregar o conteúdo');
          }
          return response.text();
        })
        .then(html => {
          mainContent.innerHTML = html;
        })
        .catch(error => {
          mainContent.innerHTML = `<p style="color: red;">Erro: ${error.message}</p>`;
        });
    }
  </script>
</body>
</html>
