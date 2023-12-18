const modalContent = document.querySelector('.popup-modal-content');
const modalContainer = document.querySelector('.modal-container');
const modalClose = document.querySelector('.fa-xmark');
const modalOpenOne = document.querySelectorAll('.enquery-modal-open');

modalClose.addEventListener('click', () => {
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
});

modalContainer.addEventListener('click', () => {
  modalContent.classList.add('hidden');
  modalContainer.classList.add('hidden');
});

modalOpenOne.forEach( mOpenOne => {
    mOpenOne.addEventListener('click', () => {
        console.log('Hello');
        modalContent.classList.remove('hidden');
        modalContainer.classList.remove('hidden');
    })
} )