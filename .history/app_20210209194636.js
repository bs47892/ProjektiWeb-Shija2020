const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide img');

//butonat
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let counter = 1;
const size = caroueselImages [0].clientWidth;

carouselSlide.style.transform = 'translateX('+(-size * counter) + ' px)';

//button listener
nextBtn.addEventListener('click',()=>){
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = 'translateX('+(-size * counter) + ' px)';
}
prevBtn.addEventListener('click',()=>){
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = 'translateX('+(-size * counter) + ' px)';
}
carouselSlide.addEventListener('transitioned',  () =>{
    if(caroueselImages[images].id === 'lastClone'){
        carouselSlide.style.transition = "none";
        counter = caroueselImages.length -2;
        carouselSlide.style.transform = 'translateX('+(-size * counter) + ' px)';
    }
}

