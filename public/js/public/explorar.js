// public/js/explore.js

document.addEventListener('DOMContentLoaded', () => {

    // === Módulo de Navegação e Pesquisa ===
    // Encapsula toda a lógica de botões de categoria e barra de pesquisa
    const ExploreNavigation = (function() {
        const categoryButtons = document.querySelectorAll('.category-button');
        const searchInput = document.getElementById('searchExplore');
        const exploreResultsArea = document.getElementById('exploreResults'); // Referência global para a área de resultados

        /**
         * Função para simular o carregamento de resultados.
         * Pode ser chamada por outras funcionalidades se necessário.
         * @param {string} query - O termo de pesquisa.
         * @param {string} category - A categoria selecionada.
         */
        function loadResults(query = '', category = 'gerais') {
            exploreResultsArea.innerHTML = `<p>Carregando resultados para: <strong>${category}</strong> ${query ? `com a pesquisa: <strong>"${query}"</strong>` : ''}...</p>`;

            setTimeout(() => {
                let content = `<div class="results-grid">`;
                // Sua lógica existente para gerar HTML dos cards baseada na categoria e query
                // INCLUA AQUI O CÓDIGO DA SIMULAÇÃO DOS CARDS QUE EU TE DEI ANTERIORMENTE
                switch (category) {
                    case 'gerais':
                        content += `resultados de gerais
                        `;
                        break;
                    case 'fazendas':
                        content += `resultados de fazendas
                        `;
                        break;
                    case 'produtos':
                        content += `resultados de produtos
                        `;
                        break;
                    case 'artigos-dicas':
                        content += `resultados de artigos e dicas
                        `;
                        break;
                    default:
                        content += `<p>Nenhum resultado encontrado para a categoria ${category}.</p>`;
                }
                content += `</div>`; // Fecha .results-grid
                exploreResultsArea.innerHTML = content;
            }, 300); // Atraso de 300ms para simular o carregamento
        }

        function init() {
            // Event listener para os botões de categoria
            categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    const selectedCategory = button.dataset.category;
                    const currentSearchQuery = searchInput.value;
                    loadResults(currentSearchQuery, selectedCategory);
                });
            });

            // Event listener para a barra de pesquisa
            let searchTimeout;
            searchInput.addEventListener('input', () => {
                clearTimeout(searchTimeout); // Limpa o timeout anterior se o usuário digitar rápido
                searchTimeout = setTimeout(() => {
                    const currentSearchQuery = searchInput.value;
                    const activeCategoryButton = document.querySelector('.category-button.active');
                    const selectedCategory = activeCategoryButton ? activeCategoryButton.dataset.category : 'gerais';
                    loadResults(currentSearchQuery, selectedCategory);
                }, 500); // Espera 500ms depois que o usuário para de digitar para pesquisar
            });

            // Carregar resultados iniciais ao carregar a página (para a categoria "Gerais" por padrão)
            const initialActiveButton = document.querySelector('.category-button.active');
            if (initialActiveButton) {
                loadResults('', initialActiveButton.dataset.category);
            } else {
                loadResults('', 'gerais'); // Fallback caso não haja botão ativo no HTML
            }
        }

        // Retorna a interface pública do módulo
        return {
            init: init,
            // Opcional: expor loadResults se outras partes do explore.js precisarem acioná-la
            triggerResultsLoad: loadResults
        };
    })();

    // === Adicione outros módulos aqui conforme a necessidade ===
    // Exemplo: Módulo de Filtros Avançados
    /*
    const ExploreFilters = (function() {
        // ... sua lógica para filtros, como abrir/fechar painel, aplicar, etc.
        function init() {
            // ... adicionar event listeners para os filtros
            // Quando os filtros são aplicados, você pode chamar ExploreNavigation.triggerResultsLoad()
        }
        return { init: init };
    })();
    */

    // === Inicialização de todos os módulos ===
    ExploreNavigation.init();
    // Se você tiver ExploreFilters, descomente a linha abaixo:
    // ExploreFilters.init();
    // ... e assim por diante para outros módulos
});