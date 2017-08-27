<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">A Seu Serviço</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php 

                $args = array( 'post_type' => 'servico' );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ):
                    while ( $loop->have_posts() ):
                        $loop->the_post();
            ?>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <?php the_post_thumbnail( array(200, 200) ); ?>
                                <h3><?php the_title();?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
            <?php 
                    endwhile;
                endif;
            ?>

        </div>
       
        <div class="col-lg-12 text-center">
            <p></p>
            <a href="#services" class="btn btn-primary btn-xl page-scroll">Saiba mais</a>
        </div>
    </div>
</section>