document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.has-sub > a').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const parent = link.parentElement;
            parent.classList.toggle('open');
            const submenu = parent.querySelector('.slide-menu');
            if (submenu) {
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
});
