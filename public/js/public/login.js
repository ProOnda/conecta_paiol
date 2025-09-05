document.addEventListener('DOMContentLoaded', function() {
    // Seleciona o campo de senha
    const passwordInput = document.querySelector('.input-field[type="password"]');

    // Seleciona o ícone de olho
    const togglePasswordIcon = document.querySelector('.toggle-password');

    // Verifica se os elementos existem na página antes de adicionar o listener
    if (passwordInput && togglePasswordIcon) {
        // Adiciona um evento de clique no ícone
        togglePasswordIcon.addEventListener('click', function() {
            // Verifica o tipo do input
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            
            // Muda o tipo do input
            passwordInput.setAttribute('type', type);
            
            // Alterna a classe do ícone para mudar o visual (olho aberto/fechado)
            this.classList.toggle('bi-eye-fill');
            this.classList.toggle('bi-eye-slash-fill');
        });
    }
});