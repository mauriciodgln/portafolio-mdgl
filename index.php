<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
  incluirTemplate('iconosContacto');
  incluirTemplate('bubbles');
?>

    <div id="contenido" class="contenedor-padding">
      <div class="seccion margen-cero">
        <section class="contenido-principal contenedor">
          <div>
            <h1>
              ¡Hola! Me llamo <br />
              <span class="nombre">Mauricio González</span>
            </h1>
          </div>

          <div>
            <p class="dev">
              Desarrollador Web.<br />
              <span>
                Me encanta crear proyectos personales para estar en constante aprendizaje y a la vez mostrar
                mediante estos mi conocimiento.
              </span>
            </p>
          </div>

          <div>
            <a href="mailto:maudgzzln@gmail.com" class="boton-contacto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="icono icon icon-tabler icon-tabler-mail"
                width="32"
                height="32"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#000000"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <polyline points="3 7 12 13 21 7" />
              </svg>
              Contáctame
            </a>
          </div>

          <div>
            <a href="#proyectos" class="trabajos-destacados">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="icono icon icon-tabler icon-tabler-arrow-down"
                width="32"
                height="32"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#000000"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="18" y1="13" x2="12" y2="19" />
                <line x1="6" y1="13" x2="12" y2="19" />
              </svg>
              Trabajos destacados
            </a>
          </div>
          <!-- .inferior -->
        </section>
        <!-- .contenido-principal -->
      </div>
      <!-- .contenido-principal -->

      <main class="seccion contenedor seccion-proyectos" id="proyectos">
        <div class="contenedor-proyecto">
          <div class="contenido-proyecto">
            <h2>01 / Bienes Raíces</h2>
            <p class="info-proyecto">
              Dolorum necessitatibus assumenda ipsam, voluptatibus officiis quod
              consequatur unde atque odit obcaecati dolor ipsa?
            </p>
            <p class="tecnologias-proyecto">PHP - MySQL - SASS</p>
            <div class="iconos-proyecto">
              <div class="icono">
                <a
                  href="https://github.com/mauriciodgln/BienesRaicesPHP"
                  target="_blank"
                  >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-github"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#000000"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <title>GitHub</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                    />
                  </svg>
                </a>
              </div>
              <div class="icono">
                <a href="http://bienesraicesphp.x10.mx" target="_blank">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-external-link"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#000000"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <title>Ver Proyecto</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5"
                    />
                    <line x1="10" y1="14" x2="20" y2="4" />
                    <polyline points="15 4 20 4 20 9" />
                  </svg>
                </a>
              </div>
              <div class="icono">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <title>Leer Más</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="2" />
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="imagen-proyecto">
            <a href="http://bienesraicesphp.x10.mx" target="_blank">
              <div>
                <picture>
                  <source srcset="build/img/img-proyecto-bienesRaices.avif" type="image/avif" />
                  <source srcset="build/img/img-proyecto-bienesRaices.webp" type="image/webp" />
                  <img
                    loading="lazy"
                    src="src/img/img-proyecto-bienesRaices.jpg"
                    alt="Imagen Proyecto"
                    width="200"
                    height="200"
                  />
                </picture>
              </div>
            </a>
          </div>
        </div>

        <div>
          <span class="separador"></span>
        </div>

        <div class="contenedor-proyecto">
          <div class="contenido-proyecto">
            <h2>02 / Local Storage</h2>
            <p class="info-proyecto">
              Dolorum necessitatibus assumenda ipsam, voluptatibus officiis quod
              consequatur unde atque odit obcaecati dolor ipsa?
            </p>
            <p class="tecnologias-proyecto">JavaScript - CSS - HTML</p>
            <div class="iconos-proyecto">
              <div class="icono">
                <a
                  href="https://github.com/mauriciodgln/LocalStorage"
                  target="_blank"
                  >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-github"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#000000"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <title>GitHub</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                    />
                  </svg>
                </a>
              </div>
              <div class="icono">
                <a href="https://mauriciodgln.github.io/LocalStorage" target="_blank">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-external-link"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#000000"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <title>Ver Proyecto</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5"
                    />
                    <line x1="10" y1="14" x2="20" y2="4" />
                    <polyline points="15 4 20 4 20 9" />
                  </svg>
                </a>
              </div>
              <div class="icono">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <title>Leer Más</title>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="2" />
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="imagen-proyecto">
            <a href="https://mauriciodgln.github.io/LocalStorage" target="_blank">
              <div>
                <picture>
                  <source srcset="build/img/img-proyecto-localStorage.avif" type="image/avif" />
                  <source srcset="build/img/img-proyecto-localStorage.webp" type="image/webp" />
                  <img
                    loading="lazy"
                    src="src/img/img-proyecto-localStorage.jpg"
                    alt="Imagen Proyecto"
                    width="200"
                    height="200"
                  />
                </picture>
              </div>
            </a>
          </div>
        </div>

        <div class="ver-proyectos">
          <a href="#">Ver Todos</a>
        </div>
      </main>
      <!-- .proyectos main -->

      <section class="seccion contenedor skills-contacto">
        <div class="contenido-skills">
          <h2>Tecnologías y habilidades...</h2>

          <div class="contenedor-skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>SASS</span>
            <span>Gulp</span>
            <span>npm</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Diseño Responsivo</span>
          </div>
        </div>

        <div class="contenido-contacto">
          <h2>Contáctame</h2>
          <p>
            Mi bandeja de entrada siempre está disponible. Siéntete libre de escribirme 
            si tienes alguna pregunta o simplemente si deseas saludar ;) <br>
            Haré todo lo posible para responderte.
          </p>
          <a href="mailto:maudgzzln@gmail.com" class="boton-contacto">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icono icon icon-tabler icon-tabler-mail"
              width="32"
              height="32"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#000000"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="3" y="5" width="18" height="14" rx="2" />
              <polyline points="3 7 12 13 21 7" />
            </svg>
            Saludar
          </a>
        </div>
      </section>
    </div>
    <!-- .contenedor-padding  contenido -->

<?php
  incluirTemplate('footer');
?>