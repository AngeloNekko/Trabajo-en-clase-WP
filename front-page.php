<?php get_header(); ?>
<main>
<div class="w-16 md:w-32 lg:w-48">
<div class=" sm:text-left block justify-center items-center">
<h1 class="border: groove 3em">Pagina de presentacion</h1>
</div>
<div class="md:row-span-3 flex space-x-4justify-center items-center space-x-10 my-20"  >
<div class="flex-1">
<img src="<?php echo get_template_directory_uri() ?> /img/15672868_1115356425229690_5495509133130836684_n.jpg"width="20%" height="10%" class="float-right md:float-left">
</div>
<p class="text-purple-600">Hola soy Angelo Aulestia tengo 20 años, estudiante del intintuto Tecnologico Quito</p>
</div>
<h1 class=" justify-center items-center">Habilidades</h1>
<div class="container mx-auto items-center space-x-10 my-20">
<img src="<?php echo get_template_directory_uri() ?> /img/Angular_full_color_logo.svg.png" width="10%" height="5%" class="float-right md:float-left" alt="">
<p>Puedo Programar en Angular, nivel medio</p>
</div>
<div class=" justify-center items-center space-x-10 my-20">
<img src="<?php echo get_template_directory_uri() ?> /img/1200px-PHP-logo.svg.png" width="10%" height="5%" class="float-right" class="float-right md:float-left" alt="">
<p>Domino PHP en un nivel avanzado</p>
</div>
<div class=" justify-center items-center space-x-10 my-20">
<img src="<?php echo get_template_directory_uri() ?> /img/HTML.png" width="10%" height="5%" class="float-right md:float-left" alt="">
<p>Utiizo el enmaquetado de HTML para el diseño web</p>
</div>
<div class=" justify-center items-center space-x-10 my-20">
<img src="<?php echo get_template_directory_uri() ?> /img/java.png" width="10%" height="5%"  class="float-right md:float-left" alt="">
<p>Utilizo Tambien java y sus derivaciones de script en un nivel medio</p>
</div>
</div>
</main>
<?php get_footer(); ?>