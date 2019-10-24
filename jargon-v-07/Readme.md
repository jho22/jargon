# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Custom Post Types

## functions.php   
initial setup of your theme
```php
if ( ! function_exists( 'jargon_setup' ) ) :
       
       function jargon_setup(){
           echo "Iam the function";
           add_theme_support( 'title-tag' );
       } 
endif;

  add_action( 'after_setup_theme', 'jargon_setup' );
```

## functions.php file
switch to the old post editor.
```php
  add_filter('use_block_editor_for_post', '__return_false', 10);
```

## Custom Post Type UI
 

```php
//function creates a custom post type of movies
function create_post_type_movies()
{
    // creates label names for the post type in the dashboard the post panel and in the toolbar.
 
}
// Change default "Enter Title Here" text 
// for admin area based on CPT
add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input()
{
    $screen = get_current_screen();
    if ($screen->id != 'food') {
        return;
    }
    ?>
    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>
  <?php
}

// you'll want to rename your  function
// XXX => name of your post type
function save_post_type_post($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'XXX') {
        return;
    }

    // add the name of the filed that contains the 
    // title YYYYYY = name of the group that contains the
    // title
    $header = get_field('YYYYYYY');
    //ZZZZ ===> name of field for the title
    $post_title = $header['ZZZ'];
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

add_action('acf/save_post', 'save_post_type_post'); 

```

## Custom Post Type Dashboard Icons

If you want to make your own custom icons then you need to use a tool that makes fonts or icon fonts. There are free and paid tools for this. [iconmoon](https://icomoon.io/#home/) is a free font icon maker that you can use if you wish to pimp out the dashboard. Drawback is that you need to give an email to download your font. You can always use the WordPress standard [dash icons](https://developer.wordpress.org/resource/dashicons/#media-document)

#### Positions for Core Menu Items

2 Dashboard

4 Separator

5 Posts

10 Media

15 Links

20 Pages

25 Comments

59 Separator

60 Appearance

65 Plugins

70 Users

75 Tools

80 Settings

99 Separator

## Create A Custom Post Type Template.

Once you have your functions.php file coded you will see your new post type in the dashboard sidebar. Click on your new post type and create a new post.

1. Where does it take you when you view the template?

1. Why does it take you there?

1. What do you have to do to create a custom template?
