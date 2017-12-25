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
<article class="col-md-8">
<?php
  if(have_posts()){
    while(have_posts()){ 
        the_post(); 
          
         the_content(); 
    }
 }?>
 </article>
 <sidebar class="col-md-4">
     <h2>sidebar</h2>
 </sidebar>
 </div>
 <?php
get_footer();