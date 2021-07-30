<?php get_header(); ?>


    <section class="plantillaStandar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php while (have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <article>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>