</div> <!-- zamykamy tag content otwarty w pliku header.php -->

<footer>
    <div class="navigation_bottom"> <!--wyświetla się tylko wtedy kiedy jest więcej wpisów niż powinno być-->

        <?php
        next_posts_link( '<< PREVIOUS ', $the_query->max_num_pages );
        previous_posts_link( ' NEXT >>' );
        ?>

    </div>
    <div class="copyright">
        <p>Wykonanie: <a href="http://www.adresktoregoniema.pl"> P.SZ</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>