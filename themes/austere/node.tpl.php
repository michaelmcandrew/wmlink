<?php 
// $Id: node.tpl.php,v 1.1.8.2 2008/08/21 01:32:55 duvien Exp $
//    Copyright 2008 duvien.com

//    This is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.

//    It is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.

//    You should have received a copy of the GNU General Public License
//    along with Forest Floor.  If not, see <http://www.gnu.org/licenses/>.
?>
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
  <?php if ($picture) {print $picture;}?>
  <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
 
  <span class="submitted"><?php print $submitted?></span>
 
  <div class="content"><?php print $content?></div>
<div class="taxonomy"><?php print $terms?></div>
  <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
</div>
