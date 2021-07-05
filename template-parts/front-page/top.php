<section id="home" class="home">
    <div class="content">
        <div class="row">
            <div class="left">
                <div class=" ">
                    <h1><?php echo ((get_field('h1') ) ? get_field('h1')  : the_title() ); ?></h1>
                    <!-- <a class="btn-link" href="#">
                        <button class="btn btn-top">Sprawdź</button>
                    </a> -->
                </div> 
            </div>
            <div class="right">
                <?php if (get_field('obrazek_top')) : ?>
                    <img class="hero-image img-responsive  " src="<?php echo get_field('obrazek_top'); ?>" alt="<?php echo get_field('obrazek_top_alt'); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <svg class="wave" width="1920px" height="150px" viewBox="0 0 1920 150">
        <path fill="#fff" d="M1920,150H0V43c0,0,150.026,143.803,641.497,32 C1380-93,1920,90,1920,90"></path>
    </svg>
</section>