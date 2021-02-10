const slide = document.querySelector('.slide');
const images = document.querySelectorAll('.slide img')

/*Buttons*/

const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let count = 1;
const size= images[0].clientWidth;

slide.style.transform = 'translateX('+ (-size * count) + 'px)';

//Button listeners

nextBtn.addEventListener('click', ()=>{
    if(count >= images.length -1) return ;
    slide.style.transition = "transform 0.4s ease-in-out";
    count++;
    slide.style.transform = 'translateX('+ (-size * count) + 'px)';
});

prevBtn.addEventListener('click', ()=>{
    if(count <= 0) return ;
    slide.style.transition = "transform 0.4s ease-in-out";
    count--;
    slide.style.transform = 'translateX('+ (-size * count) + 'px)';
});

slide.addEventListener('transitionend', ()=>{
    if(images[count].id === 'last'){
        slide.style.transition = "none";
        count = images.length -2;
        slide.style.transform = 'translateX('+ (-size * count) + 'px)';
    }
    if(images[count].id === 'first'){
        slide.style.transition = "none";
        count = images.length -count;
        slide.style.transform = 'translateX('+ (-size * count) + 'px)';
    }
});






