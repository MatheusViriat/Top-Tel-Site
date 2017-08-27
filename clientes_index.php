<section class="separador_secao" id="about"></section>
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Clientes</h2>
                <h4 class="section-heading">Alguns de nossos principais clientes</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php 

                $args = array( 'post_type' => 'cliente', 'posts_per_page' => 30 );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ):
                    while ( $loop->have_posts() ):
                        $loop->the_post();
            ?>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <?php the_post_thumbnail( array(200, 200) ); ?>
                                <?php the_content(); ?>
                            </div>
                        </div>
            <?php 
                    endwhile;
                endif;
            ?>

        </div>
    </div>
</section>

<section class="separador_secao"></section>