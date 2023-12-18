
const showMoreBtn = document.querySelector('.property-detail-show-more-btn');
const showLessText = document.querySelector('.property-detail-show-less-text');

showMoreBtn.addEventListener('click', () => {
  console.log('hello');
  showLessText.classList.toggle('property-detail-show-less-text-show');
})




const heartShapes = document.querySelectorAll('.fa-heart1');

heartShapes.forEach(heartShape => {
  heartShape.addEventListener('click', () => {
    heartShape.classList.toggle('fill-heart-bg');
  });
});

const heartShapes1 = document.querySelectorAll('.fa-heart2');

heartShapes1.forEach(heartShape1 => {
  heartShape1.addEventListener('click', () => {
    heartShape1.classList.toggle('fill-heart-bg1');
  });
});


