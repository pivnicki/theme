<!DOCTYPE html>
<html lang="en">
<head>

  <title>Spektar Plus</title>
  <?php wp_head(); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="<?php echo 'http://localhost/wp/'; ?>" class="navbar-brand"   >Spektar Plus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<?php if ( !is_front_page() ) : ?>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Page Menu', 'menu_class' => 'nav-menu' ) ); ?>
<?php else : ?>
<ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Ko Smo mi?</a></li>
        <li><a href="#services">Usluge</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#posao">Naš Posao</a></li>
        <li><a href="#contact">Kontakt</a></li>
      </ul>
 <?php endif; ?>
      
    </div>
  </div>
</nav>