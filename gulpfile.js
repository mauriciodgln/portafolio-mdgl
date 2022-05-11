const plumber = require('gulp-plumber');

// Dependencias CSS
const { src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss')
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');


// Dependencias JS
const sourcemaps = require('gulp-sourcemaps')
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');


// Dependencias Imágenes
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const webp = require('gulp-webp');
const avif = require('gulp-avif');


// Paths
const paths = {
  scss: 'src/scss/**/*.scss',
  js: 'src/js/**/*.js',
  imagenes: 'src/img/**/*'
}


// Function para compilar hojas de estilo css
function css( done ) {

  src(paths.scss)
    .pipe( plumber() )
    .pipe( sourcemaps.init() )
    .pipe( sass() )
    .pipe( postcss([autoprefixer(), cssnano()]) )
    .pipe( sourcemaps.write('.') )
    .pipe( dest('build/css') )
  done();

}


// Function para compilar archivos js
function javascript( done ) {

  src(paths.js)
    .pipe( plumber() )
    .pipe( sourcemaps.init() )
    .pipe( concat('bundle.js') )
    .pipe( terser() )
    .pipe( sourcemaps.write('.') )
    // .pipe( rename({ suffix: '.min' }) )
    .pipe( dest('./build/js') )
  done();

}


// Funciones para imagenes
function imagenes( done ) {
  src(paths.imagenes)
    .pipe( cache( imagemin( { optimizationLevel: 3} ) ) )
    .pipe( dest('build/img'))
  done();
}

function versionWebp( done ) {
  src(paths.imagenes)
    .pipe( cache( imagemin( { optimizationLevel: 3} ) ) )
    .pipe( webp() )
    .pipe( dest('build/img') )
  done();
}

function versionAvif ( done ) {
  src(paths.imagenes)
    .pipe( cache( imagemin( { optimizationLevel: 3} ) ) )
    .pipe( avif( { quality: 50 } ) )
    .pipe( dest('build/img'))
  done();
}


// Function para leer cambios en archivos y compilar automaticamente
function watchArchivos() {
  watch( paths.scss, css );
  watch( paths.js, javascript );
  watch( paths.imagenes, imagenes );
  watch( paths.imagenes, versionWebp );
  watch( paths.imagenes, versionAvif );
}


exports.css = css;
exports.javascript = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.watchArchivos = watchArchivos;
exports.default = parallel(css, javascript, imagenes, versionWebp, versionAvif, watchArchivos); 