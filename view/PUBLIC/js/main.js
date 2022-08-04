const toggleMenuElement = document.getElementById('toggleMenu');
const mainMenuElement = document.getElementById('mainMenu');

toggleMenuElement.addEventListener('click' , ()=>{
    mainMenuElement.classList.toggle('mainMenuShow');
})