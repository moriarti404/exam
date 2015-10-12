<?php
/*
 Template Name: Work
 */
?>
<?php get_template_part( 'header-work', 'work-template' ); ?>

<?php
$args = array(
    'post_type' => 'projects',
    'publish' => true,
    'paged' => get_query_var('paged'),
    'order' => 'ASC',
);
$query = new WP_Query ($args);
?>
<?php while($query->have_posts()) {
    $query->the_post(); ?>

    <article class="col-md-4 col-sm-4 projects" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
        <h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php
        $taxo_text = "";
        $os_list = get_the_term_list( $post->ID, 'purpose', ' ', ', ', '' );
        if ( '' != $os_list ) {
            $taxo_text .= "$os_list";
        }
        if ( '' != $taxo_text ) {
            echo $taxo_text;
        } // endif ?>
    </article><!-- #post-## -->

<?php } // end of the loop. ?>

<?php get_footer(); ?>
