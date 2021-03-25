<?php
    get_header();
?>
<img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>"
    height="<?php echo get_custom_header()->height; ?>" alt="" />

<div class="content-area">
    <main>
        <section class="slide">
            Slide
        </section>
        <section class="services">
            Services
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-3">
                        Sidebar
                    </aside>
                    <div class="news col-md-9">

                        <?php
                        //If there are my posts
                            if (have_posts()):
                                //while have posts, show them to us
                                while (have_posts()): the_post();
                        ?>
                        <?php
                            // echo "<pre>";
                            // print_r($post);
                            // echo "</pre>";
                            get_template_part('template-parts/content');
                                endwhile;
                            else:
                                ?>
                        <p>Khong co noi dung nao duoc hien thi</p>
                        <?php
                            endif;
                        ?>
                    </div>
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
 ?>