<?php 
// $Id:
//    Copyright 2008 duvien.com
//
//    Free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    It is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License.
//    If not, see <http://www.gnu.org/licenses/>.
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php if ($right);else echo "<style type=\"text/css\" media=\"all\">#main {width:660px;}  #main .inner {padding-right:0px;} #mission {margin-right:0;}</style>"; ?>
<?php if ($left);else echo "<style type=\"text/css\" media=\"all\">#main {width:660px;} #main .inner {padding-left:0px;} #mission {margin-left:0;}</style>"; ?>
<?php if ($right);elseif($left);else echo "<style type=\"text/css\" media=\"all\">#main {width:448px;} #main .inner {padding:0px;} #mission {margin:0;}</style>"; ?>
<!-- IE sucks, Go Firefox! -->
<!--[if IE 7]>
	<link rel="stylesheet" href="<?php print base_path() . path_to_theme() ?>/ie7.css" type="text/css" media="screen, projection" />
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" href="<?php print base_path() . path_to_theme() ?>/ie6.css" type="text/css" media="screen, projection" />
<![endif]-->
<!--[if lt IE 7]>
<script defer type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/pngfix.js"></script>
<![endif]-->
<?php print $scripts ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body class="<?php print $body_classes; ?>">
<div id="top_line"></div>
<div id="wrapper_outer">
<div id="wrapper">
	<?php if ($header_top) { ?>
    <div id="header-top">
    	<?php print $header_top ?>
    </div>	
	<?php } ?>
  	<div id="header">
		<?php if ($logo) { ?><div id="logo"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
    	<?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
    	<?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
		<?php if (isset($primary_links)) { ?>
			<div id="primary"><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?></div><div style="clear:right"></div>
		<?php } ?>
    </div>
	<div class="breadcrumb">
		<?php print $breadcrumb ?>
	</div>
	<?php if ($header_bottom) { ?>
    <div id="header-bottom">
    	<?php print $header_bottom ?>
    </div>	
	<?php } ?>
		<div style="clear:both"></div>
    		
			<?php if ($left) { ?>
			<div id="sidebar-left" class="column">
      			<?php print $left ?>
      		</div>
    		<?php } ?>
    		
			<div id="main" class="column">
      			<?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      			<div class="inner">
        			
        			<h1 class="title"><?php print $title ?></h1>
        			<?php if ($tabs){ ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
        			<?php print $help ?>
        			<?php if ($show_messages): print $messages; endif; ?>
        			<?php print $content; ?>
        			<?php print $feed_icons; ?>
      			</div>
    		</div>

    		<?php if ($right): ?>
      		<div id="sidebar-right" class="column">
      			<?php print $right ?>
      		</div>
    		<?php endif; ?>
			<br style="clear:both;padding-top:20px;"/>
</div> <!-- //End wrapper -->
</div> <!-- //end wrapper_outer -->  
	<div id="bottom_outer">
		<div id="bottom">
			<div id="bottom-inner">
				<?php if ($bottom_block) { ?>
				<div class="bottom-block">
	      			<?php print $bottom_block ?>
	      		</div>
				
	    		<?php } ?>
			
			</div> <!-- //end bottom_outer-->
			<div class="clear"></div>
  			<div id="footer">
				<?php if (isset($secondary_links)) { ?>
					<div id="menu"><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?>
					</div>
				<?php } ?>
  				<?php echo $footer_message . $footer;?>
				Theme by <a href="http://www.duvien.com">duvien.com</a>
  			</div> <!-- //end footer -->
		</div> <!-- //end bottom-->
	</div> <!-- //end bottom_outer -->
<?php print $closure ?> 
</body>
</html>