let mix = require('laravel-mix');

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

mix.react('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles(['public/css/vendor/marketing/menu_2.css'], 'public/css/marketing/menu_2.css')
   .styles(['public/css/vendor/marketing/style.css'], 'public/css/marketing/style.css')
   .styles(['public/css/vendor/marketing/vendors.css'], 'public/css/marketing/vendors.css')
   .styles(['public/css/vendor/marketing/all_icons.css'], 'public/css/marketing/all_icons.css')
   .styles(['public/css/vendor/marketing/custom.css'], 'public/css/marketing/custom.css')
   .scripts(['public/js/vendor/marketing/modernizr.js'], 'public/marketing/js/modernizr.js')
   .scripts(['public/js/vendor/marketing/common_scripts.js'], 'public/marketing/js/common_scripts.js')
   .scripts(['public/js/vendor/marketing/main.js'], 'public/marketing/js/main.js')
   .scripts(['public/js/vendor/marketing/validate.js'], 'public/marketing/js/validate.js')
   .scripts(['public/js/vendor/marketing/video_header.js'], 'public/marketing/js/video_header.js')
   .scripts(['public/js/vendor/marketing/mapmarker.jquery.js'], 'public/marketing/js/mapmarker.jquery.js')
   .scripts(['public/js/vendor/marketing/mapmarker_func.jquery.js'], 'public/marketing/js/mapmarker_func.jquery.js')
   .styles(['public/css/vendor/admin/admin.css'], 'public/css/admin/admin.css')
   .styles(['public/css/vendor/admin/font-awesome.css'], 'public/css/admin/font-awesome.css')
   .styles(['public/css/vendor/admin/dataTables.bootstrap4.css'], 'public/css/admin/dataTables.bootstrap4.css')
   .styles(['public/css/vendor/admin/custom.css'], 'public/css/admin/custom.css')
   .scripts(['public/js/vendor/admin/jquery.easing.js'], 'public/js/admin/jquery.easing.js')
   .scripts(['public/js/vendor/admin/Chart.js'], 'public/js/admin/Chart.js')
   .scripts(['public/js/vendor/admin/jquery.dataTables.js'], 'public/js/admin/jquery.dataTables.js')
   .scripts(['public/js/vendor/admin/dataTables.bootstrap4.js'], 'public/js/admin/dataTables.bootstrap4.js')
   .scripts(['public/js/vendor/admin/jquery.selectbox-0.2.js'], 'public/js/admin/jquery.selectbox-0.2.js')
   .scripts(['public/js/vendor/admin/retina-replace.js'], 'public/js/admin/retina-replace.js')
   .scripts(['public/js/vendor/admin/jquery.magnific-popup.js'], 'public/js/admin/jquery.magnific-popup.js')
   .scripts(['public/js/vendor/admin/admin.js'], 'public/js/admin/admin.js')
   .scripts(['public/js/vendor/admin/admin-charts.js'], 'public/js/admin/admin-charts.js')
   .scripts(['public/js/vendor/admin/admin-datatables.js'], 'public/js/admin/admin-datatables.js');

