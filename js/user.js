const editBtn = document.querySelectorAll('.user-table-edit-btn');
const deleteBtn = document.querySelectorAll('.user-table-delete-btn');
const addUserBtn = document.querySelector('.user-table-add-user-btn');
const tableModal = document.querySelector('.user-table-modal-popup');
const tableModal1 = document.querySelector('.user-table-modal-popup1');
const tableModalClose = document.querySelector('.user-modal-close-btn');
const tableModalClose1 = document.querySelector('.user-modal-close-btn1');


editBtn.forEach((editB) => {
    editB.addEventListener('click', () => {
        tableModal.classList.remove('hidden');
    })
});

deleteBtn.forEach((deleteB) => {
    deleteB.addEventListener('click', () => {
        console.log('User Edited');
    })
});

tableModalClose.addEventListener('click', () => {
    tableModal.classList.add('hidden');
})

addUserBtn.addEventListener('click', () => {
    tableModal1.classList.remove('hidden1');
   
})

tableModalClose1.addEventListener('click', () => {
    tableModal1.classList.add('hidden');
    location.reload();
})