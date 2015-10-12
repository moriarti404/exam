<?php
/*
 Template Name: Blog
 */
get_header(); ?>
<?php
    $args = array(
    'post_type' => 'post',
    'publish' => true,
    'paged' => get_query_var('paged'),
    'order' => 'ASC',
    );
    $query = new WP_Query ($args);
    ?>
<?php while($query->have_posts()) {
    $query->the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
            <h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php _tk_child_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="entry-content-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php the_content(); ?>

        </div><!-- .entry-content -->

    </article><!-- #post-## -->

<?php } // end of the loop. ?>

<?php _tk_content_nav( 'nav-below' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>