document.addEventListener("DOMContentLoaded", function(event) {
    const overlay = document.querySelector('.overlay');
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');
    const btnClose = document.querySelector('.popup__btn-close');
    const icon = document.querySelector('.popup__inner i');

    if (popup.getAttribute('data-show') === 'show') {
        overlay.classList.add('active');
        popup.classList.add('active');
    }

    close.addEventListener("click", function() {
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });

    btnClose.addEventListener("click", function() {
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });
});


