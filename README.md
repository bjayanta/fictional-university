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
| site_url() | - |

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

### 8. Meta Information Settings

Need to know:

| Function name | Description |
| ------------- | ----------- |
| language_attributes() | Language |
| bloginfo('charset') | Character Set |
| body_class() | Add some class into body tag |

### 9. Navigation Menus

1st, Register the custom menu into function.php file:

```php
function any_name_what_you_like() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
}

add_action('after_setup_theme', 'any_name_what_you_like');
```

2nd, Create menu associate with registered name.

3rd, Put the PHP code to call the registered menu:

```php
wp_nav_menu([
    'theme_location' => 'headerMenuLocation'
]);

wp_nav_menu([
    'theme_location' => 'footerMenuLocationOne'
]);

wp_nav_menu([
    'theme_location' => 'footerMenuLocationTwo'
]);
```

Add menually. Need to know:

| Function name | Description |
| ------------- | ----------- |
| is_page() | Return boolean |
| wp_get_post_parent_id() | Return parent post ID |

### 10. Paginate

Add menually. Need to know:

| Function name | Description |
| ------------- | ----------- |
| paginate_links() | Paginate |

### 11. Archive

Add menually. Need to know:

| Function name | Description |
| ------------- | ----------- |
| is_catigory() | Return boolean value |
| is_author() | Return boolean value |
| the_archive_title() | Get archive title (Category, Authod, Day, Month, Year) |
| the_archive_description() | Get category description |

### 12. Custom Query

Need to understand:

| Function name | Description |
| ------------- | ----------- |
| new WP_Query() | For custom query |
| wp_reset_postdata() | Must use if use WP_Query() |
| the_time() | Return date time |
| wp_trim_words() | Use to trim and how many words to display. |
| get_the_content() | Get post description |
| get_post_type() | Get post type |

### 13. Custom Post Types

```php
function university_post_types() {
    register_post_type('event', [
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => [
            'name' => 'Events',
            'all_items' => 'All Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event'
        ],
    ]);
}

add_action('init', 'university_post_types');
```

07-004:00:00
