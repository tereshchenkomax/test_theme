<?php

get_header();
?>
    <main id="content" role="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="three-quarters-block">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php
                                get_template_part('template-parts/content', get_post_format());

                                ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php get_template_part('template-parts/content', 'none'); ?>
                        <?php endif; ?>
                    </div>
                    <?php
                    get_sidebar();
                    ?>


                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .section -->


    </main> <!-- #content -->


<?php
get_footer();
?>