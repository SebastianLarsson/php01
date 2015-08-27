<?php
get_title($title) {
  global $TSITE;
  return $title . (isset($TSITE['title_append']) ? $TSITE['title_append'] : null);
}
 ?>
