<?php
/*
Plugin Name: Mon premier plugin
Description: Ceci est mon premier plugin
Author: Yo
Version: 1.0
*/


  // function negateImage($imagePath, $grayOnly, $channel) {
  //     $imagick = new \Imagick(realpath($imagePath));
  //     $imagick->negateImage($grayOnly, $channel);
  //     header("Content-Type: img/png");
  //     echo $imagick->getImageBlob();
  // }
function custom_css(){
echo "
  <style type='text/css'>
  :root {
  filter : invert(100%);
  }

	</style>
  ";
}


add_action( 'wp_head', 'custom_css' );
