const btnSwitch = document.querySelector('#switch');
const btnMenu = document.querySelector('.menu');
const btnShowMenu= document.querySelector('#nav_links');

btnSwitch.addEventListener('click',()=>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
    document.body.classList.contains('dark')?
        localStorage.setItem('dark-mode', 'true'):
        localStorage.setItem('dark-mode', 'false');
});

if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
}else{
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}

btnMenu.addEventListener('click',()=>{
    btnShowMenu.classList.toggle('active');
});

