<?php
function themeFunctionality(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 850, true);
}
add_action('after_setup_theme', 'themeFunctionality');

function _s_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', '_s' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', '_s' ),
        'before_widget' => '<div class="widget wp_widget" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', '_s_widgets_init' );

function test_sc ($atts ){
$atts = shortcode_atts(array(
'tytul' => 'tytul',
'opis' => 'opis'
), $atts);
$tytul = $atts['tytul'];
$opis = $atts['opis'];
$przycisk='<button class="test">'.$tytul.' </button>


<div class="toggleSlide hide">'.$opis.'
</div>';

return $przycisk;
}
add_shortcode('test', 'test_sc');



function komentarze($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

<!--    <li>-->
<div class="authordate">
        <span class="author"><?php comment_author() ?></span>
        <span class="date"><?php comment_date('d-m-Y') ?> - <?php comment_time('G:i') ?></span> </div>
        <span class="comment_text"><?php comment_text() ?></span>
        <?php edit_comment_link('Edytuj komentarz') ?>
<!--    </li>-->

<?php if($args['max_depth']!=$depth) { ?>

    <div class="reply">
    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?><br/>

<?php } ?>
<?php } ?>
