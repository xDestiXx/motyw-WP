<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

    die ('Prosze nie otwierac tej strony bezposrednio. Dzieki!');

if ( post_password_required() ) { ?>

    <p> Wpis chroniony haslem. Wpisz je, aby uzyskac dostep do komentarzy. </p>

    <?php return;} ?>

<?php if (have_comments() ) : ?>

    <h3 id="comments">Comments</h3>
    <ol class="commentlist">
        <?php wp_list_comments('callback=komentarze'); ?>
    </ol>


<?php else : ?>

    <?php if ('open' == $post->comment_status) : ?>
        <p> Brak komentarzy. Twoj moze byc pierwszy! </p>
    <?php else : ?>

        <p> Komentarze sa wylaczone. </p>

    <?php endif; ?>

<?php endif; ?>