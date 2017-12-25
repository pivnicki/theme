    <footer class="site-footer">
 
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <?php bloginfo('name'); ?>
        </a>
  </div>
      <?php
      wp_nav_menu( array(
          'theme_location'    => 'footer',
          'depth'             => 2,
          'container'         => 'nav',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
      );
      ?>
  </div>
</nav>
<div class="text-center">
<?php bloginfo( 'name' ) ?> - &copy; <?php echo date('Y');?>
</div>
    
    </footer> 
  <script>
   
  </script>
</body>
</html>