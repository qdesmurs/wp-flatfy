<?php /* Template name: Inte */ ?>
<?php get_header(); ?>
<header>
    <div class="container text-center">
        <h1>Flatfy</h1>
        <p>Clean & minimal Theme</p>
        <button type="button" name="twitter" class="twit">Twitter</button>
        <button type="button" name="download" class="dl">Free Download</button>
    </div>
</header>
<main>
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="#">Flatfy</a>
        <div class="nav-link">
            <a class="navbar-text" href="#">What is?</a>
            <a class="navbar-text" href="#">Use it</a>
            <a class="navbar-text" href="#">Screenshot</a>
            <a class="navbar-text" href="#">Credits</a>
            <a class="navbar-text" href="#">Contact</a>
        </div>
    </nav>
    <div class="container">
        <?php
        $args = array(  'orderby'  => 'date',
                        'order'    => 'ASC',
                        'posts_per_page'   => 6,);
        $posts = get_posts($args);
        foreach ($posts as $post) {
            setup_postdata($post); ?>
            <div class='col-md-4'>
                    <?php the_post_thumbnail('full') ?>
                <h2><?php the_title() ?></h2>
                <p class="text"><?php the_content() ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</main>
<?php get_footer() ?>
