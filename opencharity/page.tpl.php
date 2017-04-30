  <div id="header">
	<div class="main-content">
		<a href="<?php print $front_page;?>" class="logo">
		  <img src="<?php print $base_path?>/<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" />
		</a>
		
		<div class="mobile-menu">
		<i class="fa fa-bars" aria-hidden="true"></i>
		<input type="checkbox" />
		<?php if ($main_menu): ?>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu-mobile'))); ?>
		<?php endif; ?>
		</div>
		<?php if ($main_menu): ?>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
		<?php endif; ?>
	</div>
  </div>

<div id="wrapper">
  <div id="content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>
</div>

  <div id="footer">
	<div class="main-content">
    <?php if ($page['footer']): ?>    
      <?php print render($page['footer']); ?>
    <?php endif; ?> 
	</div>	
  </div>
