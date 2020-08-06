<?php 
/**
 * Template Name: Ljdid
 */

 ?>

 <?php
    get_header();
?>

<article class="content px-3 py-5 p-md-5">

    <?php

    if(have_posts() ){
        while(have_posts() ){
            the_post();
            
            // get_template_part('template-parts/content', 'ljdid');
        }
    }
    ?>

    <?php 
        the_content();
    ?>
        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail');?>" alt="image">

    <h1 class="container">
        kra zod ghikan
    </h1>

    
</article>

<?php
    get_footer();
?>