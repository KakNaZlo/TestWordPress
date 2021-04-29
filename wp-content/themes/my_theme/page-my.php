<?php
/*
Template Name: my_theme
*/
?>

<?php 
get_header();
?>

 
  
        <main class="main">
            <section class="section1">
                <div class="container">
                  <h1 class="page_title">
                  <?php the_title(); ?>
                  </h1>

                <div class="some_text">
                <?php the_content(); ?>
                </div>
                  
                </div>
            </section>
        </main>

    </div>


    <script src="<?php bloginfo('template_directory')?>/js/js.js"></script>
</body>
</html>