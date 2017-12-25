<?php
/*
  Template Name:Band Page
 */

get_header(); ?>

<div class="container-fluid">
    <div class="row background-band">
  
    <div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
               <h2 class="text-center"><?php echo get_the_title(); ?></h2> 
               <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
      
          the_post();  
          the_content(); 
		//
		// Post Content here
		//
    } // 

} // end if
?>
			 
				<div class="col-sm-12">
		 
				<hr></hr>
			</div>
		 
			</div>
			 </div>
		 
		</div>

    </div>
</div>












<?php
get_footer();