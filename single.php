<?php get_header(); ?> 
<h1>single.php</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
<?php
    $titre = get_the_title();
    $sigle = substr($titre,0,7);
    $heure = substr($titre,-5);
?>
<code><?= $sigle ?></code>
<code><?= $heure ?></code>

 <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>