const overlay = document.querySelector('.overlay');
const content = document.querySelector('.content');

overlay.addEventListener('click', () => {
    overlay.style.opacity = '0.8';
    content.style.opacity = '1';
    window.scrollTo(6, content.offsetTop);
});

