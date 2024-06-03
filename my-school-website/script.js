document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('.toggle-menu');
    const sidebar = document.querySelector('.sidebar');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
});
