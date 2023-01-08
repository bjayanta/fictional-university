<!-- This is our amazing custom theme. -->

<?php

while (have_posts()) {
    the_post();

    ?>
    <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>
            <?php 
                // the_content();
                the_excerpt();
            ?>
        </p>
    </article>
    <hr/>
    <?php
}

?>