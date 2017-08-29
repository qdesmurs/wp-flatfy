<?php /* Template name: Inte */ ?>
<?php get_header(); ?>
<header>
    <div class="container text-center">
        <h1>Flatfy</h1>
        <p>Clean & minimal Theme</p>
        <button type="button" name="twitter" class="twit">Twitter</button>
        <button type="button" name="download" class="dl">Free Download</button>
        <a href="#middle">
            <div class="button_down">
            </div>
        </a>
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
    <div class="container hideme" id="middle">
        <h2>What is?</h2>
        <p>A special thanks to Death.</p>
        <?php
        $args = array(  'category' => '2',
                        'orderby'  => 'date',
                        'order'    => 'ASC',
                        'posts_per_page'   => 6,);
        $posts = get_posts($args);
        foreach ($posts as $post) {
            setup_postdata($post); ?>
            <div class='col-md-4'>
                    <?php the_post_thumbnail('full') ?>
                <p class="text"><?php the_content() ?></p>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="tablet hideme">
        <div class="container">
            <?php
            $args = array(  'category' => '3',
            'orderby'  => 'date',
            'order'    => 'ASC',
            'posts_per_page'   => 1,);
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <div class="col-md-6">
                    <p class="text"><?php the_content() ?></p>
                    <div class="button">
                        <button type="button" name="details" class="bi1">View Details</button>
                        <button type="button" name="visit" class="bi2">Visit Website</button>
                    </div>
                </div>
                <div class='col-md-6'>
                    <a href=<?php echo '"'.get_stylesheet_directory_uri( ).'/img/ipad.png"';  ?> target="_blank"><?php the_post_thumbnail() ?></a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="iphone hideme">
        <div class="container">
            <?php
            $args = array(  'category' => '4',
            'orderby'  => 'date',
            'order'    => 'DESC',
            'posts_per_page'   => 1,);
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <div class='col-md-6'>
                    <a href=<?php echo '"'.get_stylesheet_directory_uri( ).'/img/iphone.png"';  ?> target="_blank"><?php the_post_thumbnail() ?></a>
                </div>
                <div class="col-md-6">
                    <p class="text"><?php the_content() ?></p>
                    <div class="button">
                        <button type="button" name="details" class="bi1">View Details</button>
                        <button type="button" name="visit" class="bi2">Visit Website</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="doge hideme">
        <div class="container">
            <?php
            $args = array(  'category' => '3',
            'orderby'  => 'date',
            'order'    => 'DESC',
            'posts_per_page'   => 1,);
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                    <p class="text"><?php the_content() ?></p>
                <div class='col-md-6'>
                    <?php the_post_thumbnail() ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="container skate hideme">
        <h2>Screen App</h2>
        <p>A special thanks to Death.</p>
        <?php
        $args = array(  'category' => '2',
                        'orderby'  => 'date',
                        'order'    => 'DESC',
                        'posts_per_page'   => 3,);
        $posts = get_posts($args);
        foreach ($posts as $post) {
            setup_postdata($post); ?>
            <div class='col-md-4'>
                <?php the_post_thumbnail('full') ?>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="newsletter hideme">
        <h2>Get Live Updates</h2>
        <p>A special thanks to Death.</p>
        <button type="button" name="news">Subscribe to our Newsletter</button>
    </div>
    <div class="credits hideme">
        <div class="container">
            <h1>Credits</h1>
            <p>A special thanks to Death.</p>
            <?php
            $args = array(  'category' => '5',
                            'orderby'  => 'date',
                            'order'    => 'ASC',
                            'posts_per_page'   => 4,);
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <div class="col-md-6">
                    <div class="col-md-4">
                        <i class="fa fa-<?php echo get_post_meta($post->ID, 'fa_icon', true) ?> fa-4x" aria-hidden="true"></i>
                    </div>

                    <div class="col-md-8">
                        <?php the_content() ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="banner hideme">
        <h2>Download Free</h2>
        <a href="#">
            <i class="fa fa-superpowers"><p>&nbsp Pay with a Tweet</p></i>
        </a>
    </div>
    <div class="contact hideme">
        <h1>Contact Us</h1>
        <p>A special thanks to Death.</p>
        <div class="container">
            <form role="form" action="" method="post" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputName">Your Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Your Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputMessage">Message</label>
                        <div class="input-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
                </div>
            </form>
            <div class="col-md-6">
                <address>
                <h3>Office Location</h3>
                <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
                Washington, DC 20301</a><br>
                Phone: XXX-XXX-XXXX<br>
                Fax: XXX-XXX-YYYY</p>
                </address>

                <h3>Social</h3>
                <a href="#"><i class="fa fa-facebook-square fa-3x"> </i></a>
                <a href="#"><i class="fa  fa-twitter-square fa-3x"> </i> </a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x"> </i></a>
                <a href="#"><i class="fa fa-flickr fa-3x"> </i> </a>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="footer-title">Follow Me!</h3>
                <p>Vuoi ricevere news su altri template?<br/>
                Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
                Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a>
                </p>
                <a href="#">Flatfy Theme </a> by
                <a href="#">Andrea Galanti</a>
                is licensed to the public under
                <br>the
                <a href="#">Creative
                Commons Attribution 3.0 License - NOT COMMERCIAL</a>.
            </div>
            <div class="col-md-5">
                <div class="footer-banner">
                    <h3 class="footer-title">Flatfy Theme</h3>
                    <h5>12 Column Grid Bootstrap</h5><br>
                    <h5>Form Contact</h5><br>
                    <h5>Drag Gallery</h5><br>
                    <h5>Full Responsive</h5><br>
                    <h5>Lorem Ipsum</h5>
                    <div class="goto">
                        Go to: <a href="#" target="_blank">andreagalanti.it/flatfy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
$(window).scroll( function(){
    $('.hideme').each( function(i){
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if( bottom_of_window > bottom_of_object ){
            $(this).animate({'opacity':'1'},500);
        }
    });
});
});
</script>
<?php get_footer() ?>
