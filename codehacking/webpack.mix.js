mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/sass/app.scss', 'public/css', [
       require('tailwindcss'),
   ]);

mix.styles([
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu.css',
    'resources/assets/css/libs/sb-admin-2.css'

], 'resources/assets/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/jquery.js',
    'resources/assets/js/libs/bootstrap.js',
    'resources/assets/js/libs/metisMenu.js',
    'resources/assets/js/sb-admin-2.js',
    'resources/assets/js/libs/jquery.js',
    'resources/assets/js/libs/scripts.js'

], 'resources/assets/js/libs.js');