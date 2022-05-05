
document.addEventListener('DOMContentLoaded', function(){
  modoPantalla();
});


// Variables

const navTelefono = document.querySelector('.nav-telefono');
const lightDark = document.querySelector('.light-dark');
const lightMode = document.querySelector('.light-mode');
const darkMode = document.querySelector('.dark-mode');
const html = document.querySelector('html');
const barraNav = document.querySelector('.barra');
const navDesktop = document.querySelector('.nav-desktop');
const trabajosDestacados = document.querySelector('.trabajos-destacados');


// Event Listeners

eventListeners();
function eventListeners() {

  navTelefono.addEventListener('click', desplegarMenu);
  window.addEventListener('scroll', ocultarNav);
  lightDark.addEventListener('click', modoOscuro);
  if(trabajosDestacados) {
    trabajosDestacados.addEventListener('click', scrollSmooth);
  } else {
    return
  }

}


// Funciones

function desplegarMenu() {
  const iconosContacto = document.querySelector('.iconos-contacto');
  const footer = document.querySelector('.footer');

  navDesktop.classList.toggle('activo');
  navTelefono.classList.toggle('activo');
  contenido.classList.toggle('mover-Y');


  if( footer.classList.contains('activo') ) {
    
    footer.classList.remove('activo');
    iconosContacto.classList.remove('activo');

  } else {

    setTimeout(() => {
      footer.classList.add('activo');
      iconosContacto.classList.add('activo');
    }, 600);

  }

  eliminarActivos(navDesktop, footer, iconosContacto);
  prohibirScroll();
  efectoBlur();
}

function eliminarActivos(navDesktop, footer, iconosContacto) {
  window.addEventListener('resize', e => {

    if( window.innerWidth > 768 ) {
      
      navDesktop.classList.remove('activo');
      footer.classList.remove('activo');
      iconosContacto.classList.remove('activo');
      navTelefono.classList.remove('activo');
      contenido.classList.remove('mover-Y');
      html.classList = [];

    }
  
  });
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

function ocultarNav() {

  if( window.scrollY > 70 ) {

    barraNav.classList.add('ocultar');

  } else {

    barraNav.classList.remove('ocultar');

  }
}

function modoOscuro() {
  document.body.classList.toggle('modo-oscuro');
  darkMode.classList.toggle('ocultar');
  lightMode.classList.toggle('ocultar');
}

function modoPantalla() {

  const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');

  if(prefiereDarkMode.matches) {
    document.body.classList.add('modo-oscuro');
    lightMode.classList.remove('ocultar');
    darkMode.classList.add('ocultar');
  } else {
    document.body.classList.remove('modo-oscuro');
  }

  prefiereDarkMode.addEventListener('change', ()=> {
    if(prefiereDarkMode.matches) {
      document.body.classList.add('modo-oscuro');
      lightMode.classList.remove('ocultar');
      darkMode.classList.add('ocultar');
    } else {
      document.body.classList.remove('modo-oscuro');
      lightMode.classList.add('ocultar');
      darkMode.classList.remove('ocultar');
    }
  });
}

function efectoBlur() {

  const contieneBlur = barraNav.classList.contains('blur');

  if(contieneBlur) {
    barraNav.classList.remove('blur');
    barraNav.classList.add('no-background');
    navDesktop.classList.add('blur');
  } else {
    barraNav.classList.add('blur');
    barraNav.classList.remove('no-background');
    navDesktop.classList.remove('blur');
  }

}

const proyectos = document.querySelectorAll('.seccion-proyectos .contenedor-proyecto');
const ultimoProyecto = proyectos[proyectos.length-1];

ultimoProyecto.classList.add('ultimo-proyecto');
