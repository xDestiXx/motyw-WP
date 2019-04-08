<?php get_header(); ?>
<div id="sidebar">
<?php get_sidebar(); ?>
</div>
<div id="posts">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <article>
                    <?php the_post_thumbnail(); ?>
                    <h2> <?php the_title(); ?> </h2>
                    <div class="info">
                        <span><?php the_author(); ?></span>|
                        <span><?php the_time('d-m-Y'); ?></span>
                       <!-- <p class="category"><?php the_category(); ?></p> -->
                    </div>
                    <p> <?php the_excerpt(); ?> </p>
                    <a class="more" href="<?php the_permalink(); ?>"> Więcej </a>
                    <p class="comments"><?php comments_popup_link ('Brak komentarzy', 'Jeden komentarz', 'Komentarzy: %'); ?></p>
                </article>
        <?php endwhile; ?>

    <?php else : ?>

        <h2> Nic nie znaleziono </h2>

    <?php endif; ?>
</div>

    </div> <!--tutaj zamykamy page-content-->
</div>
<?php get_footer(); ?>


<!-- do poprawy:
miniaturki w najnowszych wpisach,
textarea do ostylowania,
commentarze do wyswietlenia-->
