# Wordpress

## 1. How to start to create a theme?

- Create a directory with <**Your-Theme-Name**> into theme directory.
- Create index.php file into your root directory.
- Create style.css file and add theme informations.
- Add a screenshot.png file to represent the theme into WP.

## 2. Show all the posts

Need to know:

| Function name | Description |
| ------------- | ----------- |
| have_posts()  | Check how many posts we have |
| the_permalink() | Get Permalink |
| the_title() | Get Title |
| get_the_title() | - |
| the_content() | Get Content |
| the_excerpt() | Get Content |
| the_ID() | - |
| get_the_id() | - |

**NB. the_content() and the_excerpt() -> Get Content. They return the same result.**

```php
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

## 3. Open a single post

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

### 4. Header & Footer

- get_header()
- get_footer()
- Load CSS
  - Create function.php
    - add_action()
    - wp_enqueue_style()
    - get_stylesheet_uri()
- Add WordPress header
  - wp_head()
  - wp_footer()

### 5. Convert Static HTML Template into WordPress

- Seperate **header** and **footer** section
- get_theme_file_uri()
- include cdn into function.php
- include javascript into function.php

### 6. Interior Page Template

How to add page title tag?

```php
function function_name() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'function_name');
```

Get current Post/Page ID

```php
get_the_ID()
```

Get current Post/Page parent ID

```php
wp_get_post_parent_id(get_the_ID())
```

### 7. Menu of child page link

Need to know:

| Function name | Description |
| ------------- | ----------- |
| get_the_ID()  | Return child pages array |
| wp_list_pages() | Print child pages list |

05 - Pages- Nutshell (003: 00:00)
