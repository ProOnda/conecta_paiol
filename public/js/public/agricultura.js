/*CARROSSEL*/

function rolarCarrossel(direcao) {
    const carrossel = document.getElementById('carrossel');
    const larguraItem = carrossel.querySelector('.item-projeto').offsetWidth + 20; // largura do item + gap
    carrossel.scrollBy({
        left: larguraItem * direcao,
        behavior: 'smooth'
    });
}