<?php

function spektrum_widgets(){
	register_sidebar(array(
		'name'		=>		__('Spektar Sidebar','spektar_sidebar'),
		'id' 		=>		'spektar_sidebar',
		'description' =>	__('Sidebar for the theme Spektar','spektar_sidebar'),
		'class'		=> 		'',
		'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style=none;">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'  
	));
}