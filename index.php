<?php
	get_header();
?>
  
		<article class="content px-3 py-5 p-md-5">
	    
		<?php

			if(have_posts() ){
				while(have_posts() ){
					the_post();
                    
                    get_template_part('template-parts/content', 'archive');
				}
			}

        ?>
<!--         
        <nav class="blog-nav nav nav-justified my-5">
            <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="">Previous</a>
            <a class="nav-link-next nav-item nav-link rounded" href="">Next</a>
        </nav> -->

        <!-- <nav class="blog-nav nav nav-justified my-5">
            <a class="nav-link nav-item nav-link d-none rounded-left" href=""
            >

            </a>
        </nav> -->

        <?php the_posts_pagination( array(
                                                'mid_size'  => 2,
                                                'next_text' => __( 'Next', 'textdomain' ),
                                                'prev_text' => __( 'Previous', 'textdomain' )
                                            )
                                        ); 
        ?>

	    </article>
	    

<?php
	get_footer();
?>