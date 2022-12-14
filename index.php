<?php get_header(); ?>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">
            <div class="row">
                <?php if( have_posts() ) : while ( have_posts() ) : the_post() ?>                
                    <?php get_template_part('template-parts/content', get_post_format() );
					?>
                    <?php endwhile;
                    start_theme_pagination();
					else: ?>
                    <h3><?php esc_html_e('There are no posts', THEME_NAME) ?></h3>
                    <?php endif; ?>                 
            </div>
        </div>
    </div>
</main>
<?php wp_footer(); ?>