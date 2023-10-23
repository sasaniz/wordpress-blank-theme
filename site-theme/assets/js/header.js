
function openContact() {
  document.getElementById('contact-display').style.display = 'block';

}
function closeMenu() {
  if (!(document.getElementById('menu-burger-icon').classList.contains('fa-xmark'))) {
    document.getElementById('nav').style.display = 'block'; 
    document.getElementById('menu-burger-icon').classList.add('burgerfadeout');
    setTimeout(() => {
      document.getElementById('menu-burger-icon').classList.remove('burgerfadeout');
      document.getElementById('menu-burger').innerHTML = `<i id="menu-burger-icon" class="menu-burger-icon fa-solid fa-xmark"></i>`;
      document.getElementById('menu-burger-icon').classList.add('burgerfadein');
    }, 100);


  } else {
    document.getElementById('nav').style.display = '';
    document.getElementById('menu-burger-icon').classList.remove('burgerfadein');
    document.getElementById('menu-burger-icon').classList.add('burgerfadeout');
    setTimeout(() => {
      document.getElementById('menu-burger-icon').classList.remove('burgerfadeout');
      document.getElementById('menu-burger').innerHTML = `<i id="menu-burger-icon" class="menu-burger-icon fa-solid fa-bars" ></i>`;
      document.getElementById('menu-burger-icon').classList.add('burgerfadein');
      
    }, 100);

  }
}

function closeButton() {
  document.getElementById('contact-display').style.display = 'none';
}