<!-- Hello 123 -->

<?php

while (have_posts()) {
    the_post();

    ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </article>
    <hr/>
    <?php
}

?>