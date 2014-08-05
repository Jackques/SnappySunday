<header id="header" data-role="header" data-id="persistent" data-position="fixed">
      <nav id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav> <!-- /#main-menu, copied from the Bartik theme -->
</header><!-- maybe put this in a region or include?-->
<!--<div id="header_dummy">
</div>-->

<section id="body_home">
	<div id="content_home">
		 <div class="header">
		 
			<?php print render($page['header']); ?>
		 </div>
		 <div class="column_1">
			<?php print render($page['side_top_right']); ?>
		 </div>
		 
		 <div class="column_2">
		 
			 <?php print render($page['content']); ?>
		 
		 </div>
		 
		 <div class="column_3">
			<?php print render($page['side_top_left']); ?>
		 </div>
	 
	</div>
</section>

<footer>
</footer>

<div id="go_down">
<?php print render($page['bottom_next']); ?>
</div>