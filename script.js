function showContent(section) {
  const mainContent = document.getElementById('main-content');

  // Exibe um carregando
  mainContent.innerHTML = '<p>Carregando...</p>';

  // Usa fetch para carregar o conteúdo do arquivo HTML correspondente
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