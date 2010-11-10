<?php
// $Id: comment.tpl.php,v 1.1.8.2 2008/08/21 01:32:55 duvien Exp $
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
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ($comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : '';?> clear-block">
    <?php if ($picture) {
    print $picture;
  } ?>
<h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <div class="content"><?php print $content;?>
    <?php if ($signature && $comment->cid > 3443): // The highest comment ID before upgrading to Drupal 6 ?>
    <div class="user-signature clear-block">
      <?php print $signature ?>
    </div>
  <?php endif; ?></div>
    <div class="links">&raquo; <?php print $links; ?></div>
  </div>
