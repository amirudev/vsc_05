var prevButton = document.getElementById('prev-button');
var nextButton = document.getElementById('next-button');
var imageList = document.getElementsByClassName('img');

var indexImage = 0;

prevButton.addEventListener('click', () => {
    imageList[indexImage].classList.toggle('hidden');
    indexImage--;
    if(indexImage <= 0){
        indexImage = imageList.length - 1;
        console.log(imageList.length);
    }
    imageList[indexImage].classList.toggle('hidden');
});

nextButton.addEventListener('click', () => {
    imageList[indexImage].classList.toggle('hidden');
    indexImage++;
    if (indexImage >= imageList.length) {
        indexImage = 0;
    }
    imageList[indexImage].classList.toggle('hidden');
});