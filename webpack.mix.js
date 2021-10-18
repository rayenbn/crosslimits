const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

   mix.js(['resources/js/app.js',
      'public/theme/js/jquery.min.js',
      'public/theme/js/jquery-ui.js',
      'public/theme/js/intlTelInput.js',
      'public/theme/js/utils.js',
      'public/theme/js/jquery.easing.1.3.js',
      'public/theme/js/waypoints.js',
      'public/theme/js/parallax/jquery.parallax-1.1.3.js',
      'public/theme/js/parallax/jquery.transform2d.js',
      'public/theme/js/parallax/script.js',
      'public/theme/js/parallax/parallax.js',
      'public/theme/js/template.js',
      'public/theme/js/masterslider.min.js',
      'public/theme/js/banner.js',
      'public/theme/js/owl.carousel.min.js',
      'public/theme/js/theme.js',
      'public/theme/js/classie.js',
      'public/theme/js/jquery.custombox.js',
      'public/theme/js/dropdown.js',
      // 'public/theme/js/main.js',
      ], 'public/js')
      .autoload({
      jquery: ['$', 'window.jQuery']
      })
      .sass('resources/sass/app.scss', 'public/css');
     