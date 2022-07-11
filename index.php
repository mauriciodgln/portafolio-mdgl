<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
  // incluirTemplate('iconosContacto');
  incluirTemplate('bubbles');
?>

    <div id="contenido" class="contenedor-padding">

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
          <a href="#proyectos" class="trabajos-destacados icono">
            <svg
              class="icon icon-tabler icon-tabler-arrow-down"
              width="32"
              height="32"
              viewBox="0 0 24 24"
              stroke-width="1"
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
            Proyectos destacados
          </a>
        </div>
        <!-- .inferior -->
      </section>
      <!-- .contenido-principal -->

      <?php 
        incluirTemplate('proyectos', $inicio = true);
      ?>

      <section class="skills-contacto">
        <div class="contenido-skills">
          <h2>Tecnologías, habilidades y herramientas que he utilizado...</h2>

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
            <span>Figma</span>
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