const dropdown = document.querySelectorAll('.side-dropdown');

dropdown.forEach( item => {
  const a = item.parentElement.querySelector('.sidebar-menu-anchor');
  a.addEventListener('click', function(e) {
    e.preventDefault();

    if(item.classList.contains('active')){
      dropdown.forEach( i => {
        const aItem = i.parentElement.querySelector('.sidebar-menu-anchor');
        aItem.classList.remove('active');
      })
    }

    this.classList.toggle('active');
    item.classList.toggle('close-side-dropdown');
  })
})


const hideMenu = document.querySelector('.open-close-btn');
const sidebar = document.querySelector('#sidebar');
const main = document.querySelector('#main');
const header = document.querySelector('.header');


hideMenu.addEventListener('click', () => {
  sidebar.classList.toggle('sidebar1');
  header.classList.toggle('header1')
  main.classList.toggle('main1')
})



const formDropdown = document.querySelectorAll('.form-dropdown-div');

formDropdown.forEach( dropdown => {
  const dropdownSelect = dropdown.querySelector('.dropdown-select');
  const caret = dropdown.querySelector('.caret');
  const formDropdownMenu = dropdown.querySelector('.form-dropdown-menu');
  const formDropdownOptions = dropdown.querySelectorAll('.form-dropdown-menu-li');
  const dropdownSelected = dropdown.querySelector('.dropdown-selected');

  dropdownSelect.addEventListener('click', () => {
    caret.classList.toggle('caret-rotate');
    formDropdownMenu.classList.toggle('form-dropdown-menu-open');
  })

  formDropdownOptions.forEach(options => {
    options.addEventListener('click', () => {
      dropdownSelected.innerText = options.innerText;
      caret.classList.remove('caret-rotate');
      formDropdownMenu.classList.remove('form-dropdown-menu-open');

      formDropdownOptions.forEach(options => {
        options.classList.remove('active');
      });

      options.classList.add('active');
    })
  })

})


