<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_SSL_CHECK);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_SSL_CHECK));

  require(DIR_WS_INCLUDES . 'template_top.php');
?>

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<div class="contentContainer">
  <div class="contentText">
    <div class="ui-widget infoBoxContainer" style=" width: 40%; float: right; padding: 0 0 10px 10px;">
      <div class="ui-widget-header infoBoxHeading"><?php echo BOX_INFORMATION_HEADING; ?></div>

      <div class="ui-widget-content infoBoxContents">
        <?php echo BOX_INFORMATION; ?>
      </div>
    </div>

    <?php echo TEXT_INFORMATION; ?>
  </div>

  <div class="text-right">
    <?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'glyphicon glyphicon-chevron-right', tep_href_link(FILENAME_LOGIN)); ?>
  </div>
</div>

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
