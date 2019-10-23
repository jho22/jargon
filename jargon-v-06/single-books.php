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

<?php get_footer();?>