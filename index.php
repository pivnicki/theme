<?php
get_header( );
?>

<?php if(is_front_page()){?>
    
   <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
     <?php  
    $the_query = new WP_Query(array(
       'cat'=>3, 
       'posts_per_page' => 1,
        
       )); 
      while ( $the_query->have_posts() ) : 
      $the_query->the_post();
     ?>
      <div class="item active ">
       <?php the_post_thumbnail('large');?>
       <div class="carousel-caption wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h3><a class="active-link" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        
       </div>
      </div><!-- item active -->
     <?php 
      endwhile; 
      wp_reset_postdata();
     ?>
     <?php 
      $the_query = new WP_Query(array(
       'category_name'=>'front', 
       'posts_per_page' => 4,
       'offset'=> 1
       )); 
      while ( $the_query->have_posts() ) : 
      $the_query->the_post();
     ?>
      <div class="item">
       <?php the_post_thumbnail('large');?>
       <div class="carousel-caption wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
       <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        
       </div>
      </div><!-- item -->
     <?php 
      endwhile; 
      wp_reset_postdata();
     ?>
    </div><!-- carousel-inner -->
       <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <i class="fa fa-angle-left"></i>
       </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <i class="fa fa-angle-right"></i>
        </a>
   </div><!-- #myCarousel -->
   
   <?php }?>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Acidfather</h3>
 <div class="row"> 
    <?php 
      $the_band = new WP_Query(array(
        'post_type'=>'Members', 
       'posts_per_page' => 3
       )); 
      while ( $the_band->have_posts() ) : 
      $the_band->the_post();
     ?>
     <div class="col-sm-4">  
      <a class="active-link" href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail',['class' => 'img-circle' ]);?> 
      
      </a>
      <div id="demo" class="collapse">
      <a class="active-link" href="<?php the_permalink();?>"><?php the_title();?></a>
      </div>
      
    </div>
    <?php endwhile; ?>
  </div>
</div>
<!-- Container (TOUR Section) -->
<div id="sound" class="bg-1">
  <div class="container">
      <div class="well">
    <h3 class="text-center">Sound</h3>
    <p class="text-center"> Remember to listen our music!</p>
</div>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="label label-danger">
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/261676408&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>      
        </span>
    </li>
      <li class="list-group-item">
          <span class="label label-danger">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/316818823&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
          </span>
        </li>  
    </ul>
    
    <div class="row text-center">
      
      <?php 
      $the_band = new WP_Query(array(
       'category_name'=>'front', 
       'posts_per_page' => 3,
       'offset'=> 1
       )); 
      while ( $the_band->have_posts() ) : 
      $the_band->the_post();
     ?>
     <div class="col-sm-4">
      <div class="thumbnail">
      <a class="active-link" href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail',array(200, 400));?> 
      </a>
      <br>
          <a class="btn" href="<?php the_permalink();?>" >More</a>
        </div>
      
    </div>
    <?php endwhile; ?>
    </div>
    </div>
  </div>
  
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  

   
</div>
 
<?php
get_footer( );