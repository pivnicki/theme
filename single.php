<?php
get_header( );
?>

<!-- Header with Background Image -->
<header class="business-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 text-center text-white mt-4"><?php echo get_the_title();?></h1>
      </div>
    </div>
  </div>
</header>

<div class="container">
<article class="col-12">
<?php
  if(have_posts()){
    while(have_posts()){ 
        the_post(); 
          
         the_content(); 
    }
 }?>
 </article>

 </div>
 <?php
get_footer();