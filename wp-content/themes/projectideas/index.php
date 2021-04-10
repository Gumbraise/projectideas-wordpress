<?php
get_header();
?>
    <main class="page landing-page">
        <section class="section main-banner" id="top" data-section="section1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tech/image4.jpg" alt="" id="bg-video"
                 style="width: 100vh; height: 100vh;">

            <div class="video-overlay header-text">
                <div class="caption">
                    <div class="text" style="filter: blur(unset);">
                        <h2 style="margin: 0;">ProjectIdeas</h2>
                        <p>Des idées pour vous les développeurs</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <form action="find.html">
                                        <input type="text" class="form-control"
                                               placeholder="Mod Spigot...">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
