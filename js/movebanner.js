const slides = document.querySelector('#slides');
let left = 0;
function moveLeft(){
    slides.style.left = -left+'%';
    if(left==300){
        left = 0;
    }else{
        left = left + 100;
    }
}
setInterval(moveLeft,3000);