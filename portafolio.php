<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
  incluirTemplate('iconosContacto');
  incluirTemplate('bubbles');
?>

  <div id="contenido" class="contenedor-padding">

    <h1 class="titulo-portafolio"> Portafolio </h1>
    <?php incluirTemplate('proyectos') ?>
  </div>

<?php
  incluirTemplate('footer');
?>