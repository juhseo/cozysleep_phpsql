let rotmenu = document.querySelector('#hd_left>span');
let hdsub = document.querySelector('#menu_sub');


rotmenu.addEventListener('click',function(){
    rotmenu.classList.toggle('on');
    hdsub.classList.toggle('on');
})

