<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
  <head>
    <title><?php print $head_title ?></title>
  
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <?php require ('includes/box_layout.php');?>

    <!--[if lte IE 6]>
    <script type="text/javascript"> 
      $(document).ready(function(){ 
        $(document).pngFix(); 
      }); 
    </script>
    <style type="text/css" media="all">@import "<?php echo $base_path ?>sites/all/themes/amity_island/ie6.css";</style>
    <![endif]-->
	<!--[if IE]>
    <style type="text/css"> .width33 { width: 33.3%; } </style>
    <![endif]-->

  </head>

  <body<?php print phptemplate_body_class($left, $right); ?>>

  <div id="wrapper">

  <div id="page-wrapper">
  
  <div id="header-wrapper" class="clear-block">

<!-- If Site Logo Enabled -->
    <?php if ($logo) { ?>
	  <div id="site-logo">
        <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
		  <?php if ($site_slogan) { ?>
		    <div class='site-slogan-logo'>
		      <h2>
			    <?php print $site_slogan ?>
			  </h2>
		    </div>
		  <?php } ?>
	  </div>
	<?php } ?>

<!-- If Site Name Enabled -->	 
	<?php if ($site_name) { ?>
	  <div id="site-name">
	    <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a>
	      <?php if ($site_slogan) { ?>
	        <div class='site-slogan'>
		      <h2><?php print $site_slogan ?></h2>
		    </div>
		  <?php } ?>
	  </div>
	<?php } ?>
	
<!-- If Search Box Enabled -->		
	<?php if ($search_box): ?>
      <div id="search-box">
        <?php print $search_box; ?>
      </div> 
    <?php endif; ?>
	  
  </div><!-- End of header-wrapper --> 
	
<!-- Primary Links -->	
	<?php if ($primary): ?>
	  <div id="primary-links" class="clear-block">
        <?php print $primary ?>
	  </div>
    <?php endif; ?> 
	  
<!-- Top User Regions -->
    <?php if ($user1 || $user2 || $user3) { ?>
      <div id="topboxes" class="clear-block">
	    <?php if ($user1) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user1 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($user2) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user2 ?>
	        </div>
		  </div>
        <?php }?>
        <?php if ($user3) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user3 ?>
		    </div>
		  </div>
        <?php }?>
      </div><!-- End of Top User Regions -->
    <?php } ?>
	
<!-- Main Layout Div & Conditional Statement -->        
    <div id="middle-wrapper" class="clear-block">

<!-- Left Sidebar -->
    <?php if ($left) { ?>
	  <div class="sidebar-left">
        <?php print $left ?>
	  </div>
    <?php } ?>    

<!-- Main Content Area -->
    <div id="main-content">
	  <div id="squeeze">
	    <div id="main-content-inner">
		  <?php print $contenttop ?>
		  <div class="clear-block">
			<?php print $breadcrumb ?>
		  </div>
          <?php if ($title) { ?>
		    <div class="node-title">
			  <?php print $title ?>
			</div>
	      <?php } ?>   
          <?php print $tabs ?>
          <?php print $help ?>
          <?php print $messages ?>	  
          <?php print $content; ?>
          <?php print $feed_icons; ?>
		  <?php print $contentbottom ?>
        </div>
	  </div>
	</div>  

<!-- Right Sidebar -->
    <?php if ($right) { ?>
	  <div class="sidebar-right">
        <?php print $right ?>
	  </div>
    <?php } ?> 	  
    </div>
  
<!-- Bottom User Regions -->
    <?php if ($user4 || $user5 || $user6) { ?>
      <div id="bottomboxes" class="clear-block">
	    <?php if ($user4) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user4 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($user5) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user5 ?>
		    </div>
	  	</div>
        <?php }?>
        <?php if ($user6) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user6 ?>
		    </div>
		  </div>
        <?php }?>
      </div><!-- End of Bottom User Regions --> 
    <?php } ?>   
  
<!-- The All Knowing All Seeing Footer Block -->
    <div id="footer" class="clear-block">
	  <?php print $footer ?>
	  <div style="text-align: center; padding: 5px; font-size: 0.9em;">
	    Designed by ThemeShark.com - <a style="text-decoration: none;" href="http://www.ThemeShark.com/">
		  <b>Drupal Themes</b></a> with Bite!
	  </div>
	</div>

<!-- Script Closure -->
    <?php print $closure ?>
	
  </div><!-- End of page-wrapper -->
  </div>
  </body>
</html>
