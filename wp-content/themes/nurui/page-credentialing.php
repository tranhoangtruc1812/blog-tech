<?php 
    get_header();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
        }
    } 
?>

<section class="credentialing">
    <div class="container credentialing-cover">
        <div class="left-box">
            <p class="pre-header">CREDENTIALING</p>
            <h1 class="header">Cultural competence credentialing.</h1>
            <a href="#" class="btn btn-violet btn-bar">Get verified</a>
        </div>
        <div class="right-box">
            <img src="/assets/credentialing/hero-screen.jpg" alt=""/>
        </div>

    </div>
</section>

<section class="logo-salad">
    <div class="container">
        <div class="line"></div>
        <p class="content">Powering inclusive care for the industry's leading organizations.</p>

        <div class="logo-collection">
        </div>
    </div>
    
</section>




<?php 
get_footer();
?>