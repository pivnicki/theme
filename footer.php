    <footer class="site-footer">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
      $args= array(
         'footer'=>__('Footer Menu')
      );
      wp_nav_menu($args);
       ?>
    </ul>
  </div>
</nav>
    <?php bloginfo( 'name' ) ?> - &copy; <?php echo date('Y');?>
    </footer> 
  <script>
   
  </script>
</body>
</html>