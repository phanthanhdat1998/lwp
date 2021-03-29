<?php
    get_header();
?>
<img class="img-fluid" src="<?php header_image(); ?>"
    width="<?php echo get_custom_header()->width; ?>"
    height="<?php echo get_custom_header()->height; ?>" alt="" />

<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">

                    <div class="news col-md-9">

                        <?php

                            the_archive_title("<h1 class='archive-title text-danger'>", "</h1>");
                            the_archive_description();
                        //If there are my posts
                            if (have_posts()):
                                //while have posts, show them to us
                                while (have_posts()): the_post();
                                // echo "<pre>";
                                // print_r($post);
                                // echo "</pre>";
                                get_template_part('template-parts/content', 'archive');
                                endwhile;
                                ?>
                        <div class="row">
                            <div class="pages col-md-6 text-left">
                                <?php
                                // echo get_previous_posts_link();
                                previous_posts_link("<< Newer posts"); ?>
                            </div>
                            <div class="pages col-md-6 text-right">
                                <?php
                                // echo get_next_posts_link();
                                next_posts_link(">> Older posts"); ?>
                            </div>
                        </div>
                        <?php
                            else:
                                ?>
                        <p>Khong co noi dung nao duoc hien thi</p>
                        <?php
                            endif;
                        ?>
                    </div>
                    <aside class="sidebar col-md-3 h-100">
                        <?php get_sidebar('blog') ?>
                    </aside>
                </div>
            </div>
        </section>
        <section class="map">
            Map
        </section>
    </main>
</div>
<?php
    get_footer();