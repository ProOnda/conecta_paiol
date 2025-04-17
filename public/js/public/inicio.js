//INICIO

document.addEventListener("DOMContentLoaded", function () {
    const inicioSection = document.querySelector(".inicio");
    
    // Remove a classe para resetar o efeito
    inicioSection.classList.remove("ativo");

    // Adiciona a classe com um pequeno atraso para reiniciar o efeito
    setTimeout(() => {
        inicioSection.classList.add("ativo");
    }, 50); // Atraso pequeno, o suficiente para reiniciar o efeito
});


//CARROSSEL

let currentCard = 0; // Índice do card atual
const cards = document.querySelectorAll('#carousel-content'); // Seleciona todos os cards
const indicators = document.querySelectorAll('.indicador i'); // Seleciona todas as bolinhas (indicadores)

function showCard(index) {
    // Esconde todos os cards
    cards.forEach(card => card.style.display = 'none');
    
    // Remove a classe 'active' dos indicadores
    indicators.forEach(indicator => indicator.classList.remove('active'));
    
    // Exibe o card correspondente e adiciona a classe 'active' ao indicador
    cards[index].style.display = 'flex';
    indicators[index].classList.add('active');
    
    currentCard = index; // Atualiza o card atual
}

function autoSlide() {
    currentCard = (currentCard + 1) % cards.length; // Avança para o próximo card
    showCard(currentCard); // Exibe o próximo card
}

let autoSlideInterval = setInterval(autoSlide, 15000); 

// Permitir que o usuário clique nos indicadores para alternar os cards manualmente
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        clearInterval(autoSlideInterval); // Pausa a rotação automática ao clicar
        showCard(index); // Mostra o card correspondente
        autoSlideInterval = setInterval(autoSlide, 10000); // Reinicia a rotação automática
    });
});

// Inicializa mostrando o primeiro card
showCard(0);



//RELATOS

let currentIndex = 0;
const totalSlides = document.querySelectorAll('.relato').length;

function showSlide(index) {
    const container = document.querySelector('.relatos-container');
    container.style.transform = `translateX(-${index * 100}%)`;
    updateDots(index);
}

function updateDots(index) {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
}

function currentSlide(index) {
    currentIndex = index;
    showSlide(index);
}

// Auto-slide every 5 seconds
setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}, 10000);

//SLIDESHOW

document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll('.slideshow img');
    let currentSlide = 0;
    const slideInterval = 5000; // 5 segundos

    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    // Inicializar a primeira imagem como ativa
    slides[currentSlide].classList.add('active');

    // Mudar para a próxima imagem a cada 5 segundos
    setInterval(nextSlide, slideInterval);
});


//ESTATISTICA
document.addEventListener("DOMContentLoaded", () => {
    const targetNum = 1000; // Número final
    const duration = 5000; // Duração da animação em milissegundos
    const increment = targetNum / (duration / 50); // Incremento baseado na duração
    let currentNum = 0;
    const numElement = document.getElementById("num");
    let hasStarted = false; // Para garantir que o contador não reinicie

    function updateCounter() {
        currentNum += increment;
        if (currentNum < targetNum) {
            numElement.textContent = Math.floor(currentNum);
            requestAnimationFrame(updateCounter);
        } else {
            numElement.textContent = targetNum;
        }
    }

    // Configurando o Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasStarted) {
                hasStarted = true; // Marca que o contador já iniciou
                updateCounter(); // Inicia o contador quando `#num` estiver visível
            }
        });
    });

    observer.observe(numElement); // Observa o elemento `#num`
});
