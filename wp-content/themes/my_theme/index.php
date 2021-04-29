<?php 
get_header();
?>

 
  
        <main class="main">
            <section class="section1">
                <div class="container section1_container">
                    <div class="info_block">
                        <h1 class="page_title main_title">
                            <!-- Many reasons to get up and start to get back in the business  -->
                        </h1>
                        <div class="main_descr">
                            The harder you work for something, the greater you’ll feel when you achieve it.
                        </div>
    
                        <div class="info_block_btn"> 
                                <a href="#" class="btn empty_btn">learn moren</a>
                                <a href="#" class="btn full_btn">demo</a> 
                        </div>
    
                        <div class="video_block">
                            <div class="video">
                                <img src="<?php bloginfo('template_directory')?>/img/play.jpg" alt="">
                            </div>
                            <div class="video_text_block">
                             <div class="video_text">
                                The harder you work for something, the greater you’ll feel when you achieve it.
                             </div>
                                <a href="#">Watch preview</a>
                            </div>
                        </div>
                    </div>
                    <div class="img_block">
                        <img src="<?php bloginfo('template_directory')?>/img/run.svg" alt="">
                    </div>
                </div>
            </section>
            <section class="partners_logo">
                <div class="container">
                    <div class="partners_logo_block">

<?php foreach(outLogo() as $post): ?>
<?php echo $post->post_content; ?>
<?php endforeach?>
                     
                    </div>
                </div>
            </section>
        </main>

    </div>


    <script src="<?php bloginfo('template_directory')?>/js/js.js"></script>
</body>
</html>