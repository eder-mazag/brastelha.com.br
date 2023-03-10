<?php /* Template Name: Páginas */ ?>

<?php get_header(); ?>

<main id="main">

    <div class="container my-5">
        <div class="row">

            <div class="col-md-8 mx-auto">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <header>
                        <div class="card mb-4 border-0 bg-light">
                            <img src="<?php the_post_thumbnail_url() ?>" width="100%" class="border-0 rounded" alt="..." loading="lazy">
                        </div>
                        <!--<h1 class="mb-4"><?php // the_title(); ?></h1>-->
                    </header>
                    <?php the_content(); ?>
                </article>
                <?php endwhile; else : ?>
                <article>
                    <p>Desculpe, nada encontrado!</p>
                </article>
                <?php endif; ?>
            </div>

            <!--<div class="col-md-3 mt-4 mt-md-0 ms-md-auto">
                <?php get_sidebar(); ?>
            </div>-->

        </div>
    </div>

</main>

<?php get_footer(); ?>