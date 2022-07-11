<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
  // incluirTemplate('iconosContacto');
  incluirTemplate('bubbles');
?>

  <div id="contenido" class="contenedor-padding">

    <h1 class="titulo"> Sobre mí </h1>

    <div class="contenedor-informacion">
      <div class="intro-info">
        <p>Hola! Mi nombre es <br><span class="nombre">Mauricio González</span></p>

        <p>Desarrollador Web 👨🏽‍💻</p>
      </div>

      <div class="imagen-mau">
        <picture>
          <source srcset="build/img/memoji.avif" type="image/avif" />
          <source srcset="build/img/memoji.webp" type="image/webp" />
          <img
            loading="lazy"
            src="src/img/memoji.jpg"
            alt="Memoji sobre mí"
            width="200"
            height="200"
          />
        </picture>
      </div>

      <div class="info-mau">
        <p>Tengo 21 años y me encanta el desarrollo web.</p>
        <p>
          Me encuentro en constante aprendizaje a través de cursos, documentación etc. y aunque por el momento no cuento con experiencia laboral, tengo algunos <a href="/portafolio.php">proyectos personales</a> que he desarrollado para mostrar mi conocimiento.
        </p>

        <br>

        <p class="subtitulo">Mis habilidades</p>
        <p>
          Tengo conocimiento en varias tecnologías como lo son HTML, CSS, SASS, JavaScript, Gulp, PHP, MySQL.
          También he hecho uso de JSON y Local Storage en algunos de mis proyectos.
        </p>
      </div>

      <div class="imagen-mau">
        <picture>
          <source srcset="build/img/memoji-2.avif" type="image/avif" />
          <source srcset="build/img/memoji-2.webp" type="image/webp" />
          <img
            loading="lazy"
            src="src/img/memoji-2.jpg"
            alt="Memoji sobre mí"
            width="200"
            height="200"
          />
        </picture>
      </div>

      <div class="info-mau">
        <p>
          Siempre estoy dispuesto a aprender nuevas tecnologías tanto en BackEnd como en FrontEnd. <br>
          Algunos de los frameworks, librerías y lenguajes de programación que deseo aprender son: Laravel, React y Angular.
        </p>
      </div>

      <div class="info-mau">
        <p>
          Si lo deseas puedes hecharle un vistazo a mis repositorios de 
          <a href="https://github.com/mauriciodgln" target="_blank">GitHub</a> 
          para ver el código de mis proyectos.
          De igual manera tienes los enlaces a mi 
          <a href="https://www.linkedin.com/in/maudgln" target="_blank">LinkedIn</a> 
          y mi 
          <a href="mailto:maudgzzln@gmail.com">correo</a> 
          por si gustas dejarme un mensaje, así como también el enlace a mi 
          <a href="https://www.instagram.com/_mdgln/" target="_blank">Instagram</a>.
        </p>
      </div>

    </div>

  </div>

  


<?php
  incluirTemplate('footer');
?>