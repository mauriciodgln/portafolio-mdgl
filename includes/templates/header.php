<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Hola! Soy un desarrollador web y este es mi portafolio donde muestro mis conocimientos a través de los proyectos que he realizado."/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="google" content="notranslate">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#fff">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#202020">
    <link rel="preload" href="build/css/app.css" as="style"/>
    <link rel="stylesheet" href="build/css/app.css" />
    <link rel="shortcut icon" href="build/img/logo.png" />
    <title>Mauricio González</title>
  </head>

  <body>

    <script type="text/javascript">
      
      theme = localStorage.getItem('theme');

      if(theme === 'dark' || theme === 'light') {
        document.body.classList.add('theme-' + theme);
      } else {
        localStorage.setItem('theme', 'light');
      }

    </script>

    <header class="barra blur">
      <div class="contenedor-padding header">

        <div class="logo">
          <a href="/" aria-label="Logo">
            <svg version="1.0"
              width="515.000000pt" height="160.000000pt" viewBox="0 0 515.000000 160.000000"
              preserveAspectRatio="xMidYMid meet">

              <g transform="translate(0.000000,160.000000) scale(0.100000,-0.100000)"
              fill="#000000" stroke="none">
              <path d="M3870 885 l0 -505 90 0 90 0 0 505 0 505 -90 0 -90 0 0 -505z"/>
              <path d="M2680 1242 c0 -71 -3 -131 -6 -135 -4 -3 -21 1 -38 11 -24 13 -56 17
              -136 17 -95 0 -110 -3 -156 -27 -67 -35 -138 -115 -165 -186 -30 -79 -36 -208
              -15 -292 32 -122 106 -213 204 -251 83 -31 217 -25 285 13 44 25 47 25 47 7 0
              -17 8 -19 80 -19 l80 0 0 495 0 495 -90 0 -90 0 0 -128z m-40 -309 c92 -98 74
              -338 -30 -395 -27 -15 -50 -18 -97 -16 -55 4 -67 8 -98 38 -46 44 -69 107 -69
              189 0 77 15 129 52 173 37 44 77 59 146 55 54 -3 62 -7 96 -44z"/>
              <path d="M370 975 l-165 -165 168 -167 167 -168 57 58 58 58 -115 109 -115
              109 113 113 112 113 -53 53 c-29 28 -55 52 -57 52 -3 0 -79 -74 -170 -165z"/>
              <path d="M1255 1126 c-21 -8 -58 -29 -82 -45 l-43 -31 0 35 0 35 -80 0 -80 0
              0 -370 0 -370 90 0 90 0 0 240 c0 182 3 249 14 273 44 103 171 115 233 20 16
              -24 18 -56 21 -280 l3 -253 89 0 89 0 3 253 c3 280 5 287 71 327 61 38 144 14
              179 -51 16 -30 18 -61 18 -281 l0 -248 96 0 96 0 -4 283 c-3 269 -4 284 -26
              332 -49 107 -132 153 -258 142 -69 -5 -152 -44 -186 -86 l-19 -25 -26 32 c-13
              18 -44 42 -66 54 -54 27 -166 34 -222 14z"/>
              <path d="M3204 1119 c-245 -94 -302 -492 -98 -678 30 -28 74 -56 100 -65 69
              -23 197 -21 253 4 24 11 45 20 47 20 2 0 4 -24 4 -52 0 -57 -24 -109 -58 -127
              -70 -38 -164 -31 -213 16 l-27 24 -81 -41 c-69 -34 -80 -43 -72 -58 19 -35 78
              -82 136 -109 54 -25 70 -28 160 -27 155 1 255 49 308 148 22 40 22 50 25 494
              l3 452 -81 0 c-75 0 -80 -1 -80 -22 0 -20 -1 -20 -18 -5 -54 49 -214 62 -308
              26z m253 -167 c53 -37 68 -83 68 -202 0 -87 -4 -112 -21 -144 -29 -56 -63 -78
              -129 -84 -66 -5 -105 9 -145 54 -36 42 -50 90 -50 179 0 106 45 187 120 218
              33 14 126 1 157 -21z"/>
              <path d="M4432 1087 l-52 -53 114 -112 114 -113 -114 -107 -113 -108 57 -57
              57 -57 163 163 c89 89 162 167 162 172 0 13 -312 325 -325 325 -6 0 -34 -24
              -63 -53z"/>
              </g>
            </svg>
          </a>
        </div>
        
        <nav class="nav-desktop">
          <a href="../../sobre-mi.php">Sobre mí</a>
          <a href="../../portafolio.php">Proyectos</a>
          <a href="../../contacto.php">Contacto</a>
          <a href="../../CV.pdf" target="_blank">CV</a>
        </nav>

        <div class="mix-header">
          <div class="div-theme">
            <button href="#" class="button-theme" aria-label="Cambiar tema de página">
              <svg width="25" height="25" viewBox="0 0 24 24" focusable="false" class="chakra-icon css-onkibi dark-mode" aria-hidden="true">
                <title>Dark Mode</title>
                <path fill="currentColor" d="M21.4,13.7C20.6,13.9,19.8,14,19,14c-5,0-9-4-9-9c0-0.8,0.1-1.6,0.3-2.4c0.1-0.3,0-0.7-0.3-1 c-0.3-0.3-0.6-0.4-1-0.3C4.3,2.7,1,7.1,1,12c0,6.1,4.9,11,11,11c4.9,0,9.3-3.3,10.6-8.1c0.1-0.3,0-0.7-0.3-1 C22.1,13.7,21.7,13.6,21.4,13.7z"></path>
              </svg>

              <svg width="25" height="25" viewBox="0 0 24 24" focusable="false" class="chakra-icon css-onkibi light-mode ocultar" aria-hidden="true">
                <title>Light Mode</title>  
                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2"></path><path d="M12 21v2"></path><path d="M4.22 4.22l1.42 1.42"></path><path d="M18.36 18.36l1.42 1.42"></path><path d="M1 12h2"></path><path d="M21 12h2"></path><path d="M4.22 19.78l1.42-1.42"></path><path d="M18.36 5.64l1.42-1.42"></path></g>
              </svg>
            </button>
          </div>

          <nav class="nav-telefono">
            <span class="linea"></span>
            <span class="linea"></span>
            <span class="linea"></span>
          </nav>
        </div>

        
      </div>
    </header>
    
    <!-- navegación -->