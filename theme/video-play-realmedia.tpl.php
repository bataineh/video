<?php 
//$Id$
/*
 * @file
 * Theme file to handle realmedia output.
 * 
 * Variables passed.
 * $video is the video object.
 * $node is the node object.
 * 
 */
?>
<object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="<?php print $video->width; ?>" height="<?php print $video->height; ?>">
  <param name="src" value="<?php print $video->url; ?>" />
  <param name="autostart" value="<?php print $video->autoplay; ?>" />
  <param name="controls" value="imagewindow" />
  <param name="console" value="video" />
  <param name="loop" value="false" />
  <object class="video-object" type="audio/x-pn-realaudio-plugin" data="<?php print $video->url; ?>" width="<?php print $video->width; ?>" height="<?php print $video->height; ?>">
    <?php print t('No video?  Get the Real Media !plugin', array('!plugin' => l(t('Plugin'), 'http://www.real.com/realplayer'))); ?>
  </object>
</object>