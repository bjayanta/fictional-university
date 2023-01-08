# Wordpress

## 1. How to create theme?

- Create a directory with <**Your-Theme-Name**> into theme directory.
- Create index.php file into your root directory.
- Create style.css file and add theme informations.
- Add a screenshot.png file to represent the theme into WP.

## Show all the posts

```php
/**
 * have_posts() -> Check how many posts we have
 * the_post() -> Take a post
 * the_permalink() -> Get Permalink
 * the_title() -> Get Title
 * the_content() and the_excerpt() -> Get Content. They return the same result.
 * 
 */

<?php
while (have_posts()) {
    the_post();
?>
<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
</article>
<?php } ?>
```

## Open a single post

```php
<?php
while (have_posts()) {
    the_post();
?>
<article>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
</article>
<?php } ?>
```
