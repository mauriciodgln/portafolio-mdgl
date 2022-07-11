
// Variables

const navTelefono = document.querySelector('.nav-telefono');
const divTheme = document.querySelector('.div-theme');
const lightMode = document.querySelector('.light-mode');
const darkMode = document.querySelector('.dark-mode');
const html = document.querySelector('html');
const barraNav = document.querySelector('.barra');
const navDesktop = document.querySelector('.nav-desktop');
const trabajosDestacados = document.querySelector('.trabajos-destacados');
const contenido = document.querySelector('#contenido');


// Event Listeners

eventListeners();
function eventListeners() {

  document.addEventListener('DOMContentLoaded', () => {
    localStorage.getItem('theme') === 'dark' ? modoOscuro() : modeLocalStorage()
  })
  
  document.addEventListener('scroll', ()=>{
    scrollY > 80 ? barraNav.classList.add('bg-nav') : barraNav.classList.remove('bg-nav');
  });

  navTelefono.addEventListener('click', desplegarMenu);
  divTheme.addEventListener('click', modoOscuro);
  if(trabajosDestacados) {
    trabajosDestacados.addEventListener('click', scrollSmooth);
  } else {
    return null
  }
}


// Funciones


function modoOscuro() {

  if(!document.body.classList.contains('theme-dark') || darkMode.classList.contains('ocultar')) {
    document.body.classList.toggle('theme-dark');
    document.body.classList.toggle('theme-light');
  }
  darkMode.classList.toggle('ocultar');
  lightMode.classList.toggle('ocultar');

  modeLocalStorage();
}

function modeLocalStorage() {

  let actualModeDocument = document.body.classList.contains('theme-dark');

  if(actualModeDocument) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
}

function desplegarMenu() {
  // const iconosContacto = document.querySelector('.iconos-contacto');
  const footer = document.querySelector('.footer');

  navDesktop.classList.toggle('activo');
  navTelefono.classList.toggle('activo');
  contenido.classList.toggle('mover-Y');
  navDesktop.classList.add('blur');

  if( footer.classList.contains('activo') ) {
    
    footer.classList.add('ocultar');
    footer.classList.remove('activo');

    setTimeout(() => {
      footer.classList.remove('ocultar');
    }, 600);

    // iconosContacto ? iconosContacto.classList.remove('activo') : null;

  } else {

    footer.classList.add('ocultar');
    setTimeout(() => {
      footer.classList.remove('ocultar');
      footer.classList.add('activo');
      // iconosContacto ? iconosContacto.classList.add('activo') : null;
    }, 600);

  }

  eliminarActivos(navDesktop, footer);
  prohibirScroll();
}

function scrollSmooth(e) {
  e.preventDefault();
  const valorEnlace = trabajosDestacados.getAttribute('href');
  const valor = document.querySelector(valorEnlace);

  valor.scrollIntoView({behavior: 'smooth'});
}

function prohibirScroll() {
  html.classList.toggle('no-scroll');
  html.classList.toggle('no-scroll-long');
}

function eliminarActivos(navDesktop, footer) {
  window.addEventListener('resize', e => {

    if( window.innerWidth > 768 ) {      
      contenido.classList.remove('mover-Y');
      navDesktop.classList.remove('activo');
      navDesktop.classList.remove('blur');
      barraNav.classList.remove('no-background');
      footer.classList.remove('activo');
      navTelefono.classList.remove('activo');
      html.classList = [];
      // iconosContacto.classList.remove('activo');
    }
  
  });
}