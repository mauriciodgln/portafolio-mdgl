<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
  // incluirTemplate('iconosContacto');
  incluirTemplate('bubbles');
?>

  <div id="contenido" class="contenedor-padding portafolio">
    <h1 class="titulo"> Portafolio </h1>
    <?php incluirTemplate('proyectos') ?>
  </div>

<?php
  incluirTemplate('footer');
?>