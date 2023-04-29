let menu = document.querySelector('#menu-icon')
let navlist = document.querySelector('.navlist')
let login = document.querySelector('#login')
let container = document.querySelector('.container')

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

/*
login.onclick = () => {
    login.classList.toggle('bx-x');
    container.classList.toggle('open');
};*/

const sr = ScrollReveal({
    distance:'65px',
    duration: 2600,
    delay: 450,
    reset: true
});
sr.reveal('.info-text',{delay:200, origin:'top'});
sr.reveal('.scroll-down',{delay:500, origin:'right'});


new swiper('.image-slider',
{
    pagination:{
        el:'.swiper-pagination',
        clicable: true,
        dynamicBullets: true,   //Динамические буллеты
    renderBullet: function(index,className){
        return '<span class="'+ className +'">'+(index +1)+'</span>';
    },
    },
});