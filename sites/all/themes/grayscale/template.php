<?php
drupal_add_js(path_to_theme('fourseasons') . '/innerfade/jquery.innerfade.js');
drupal_add_js('
 jQuery(document).ready(function(){
  jQuery("#header-image img").show();
  jQuery("#header-image").innerfade({
    speed: 1000,
    timeout: 6000,
    type: "sequence",
    containerheight: "200px"
  });
 });
', inline);

?>

