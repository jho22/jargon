<?php 
    get_header();
    // print_r(get_field('article_header'));
    $header = get_field('article_header');
?>
<style>
    .article-header{
        padding: 8rem 0;
        text-align: center;
        background: crimson;
    }
</style>

<header class="article-header">
    <h1><?php echo $header['title']?></h1>
    <p><?php echo $header['tagline']?></p>
    <img src="<?php echo $header['header_image']?>" alt="">
</header>

<!-- loop through the repeater field -->
<main>
    <?php
        if(have_rows('paragraphs')):
            while(have_rows('paragraphs')): the_row();
    ?>

    <div class="some-class">
        <p><?php the_sub_field('text_copy'); ?></p>
        <?php if(get_sub_field('support_image') !== ""){ ?>
                <img src="<?php the_sub_field('support_image') ?>" alt="">
        <?php }else{ echo "no image";} ?>
    </div>
</main>

<?php 
    endwhile; 
    endif; 
?>

<?php get_footer();?>