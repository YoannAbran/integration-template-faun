<?php
/*
Plugin Name: Mon premier plugin
Description: Ceci est mon premier plugin
Author: Yo
Version: 1.0
*/

// function custom_css(){
//   if (isset($_POST['button'])) {
//     echo "
//       <style type='text/css'>
//       :root {
//         filter : invert(90%) contrast(100%) saturate(300%) drop-shadow(0px 0px 0px white ) blur(0px) grayscale(0%) hue-rotate(0deg) sepia(0%) opacity(100%) brightness(100%);
//       }
//       ";
//   }
// }


function adddropdown(){
  printf('
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Effets
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff1" onclick="onoff1();">negatif</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff2" onclick="onoff2();">sepia</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff3" onclick="onoff3();">chroma 90°</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff4" onclick="onoff4();">flou</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff5" onclick="onoff5();">gris</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff6" onclick="onoff6();">rotate</label>
  </div>
</div>
  ');
  echo "
<style type='text/css'>
#dropdownMenuButton{
  float : right;
  margin-right : 100px;
}
</style>
  ";
}

function offon1(){
  echo"
<script type='text/javascript'>
function onoff1(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff1').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff1').value='On';
      root.style.filter = 'invert(0%)';
  }else{
    document.getElementById('onoff1').value='Off';
    root.style.filter = 'invert(100%)';
  }
}
</script>";
}
function offon2(){
  echo"
<script type='text/javascript'>
function onoff2(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff2').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff2').value='On';
      root.style.filter = 'sepia(0%)';
  }else{
    document.getElementById('onoff2').value='Off';
    root.style.filter = 'sepia(100%)';
  }
}
</script>";
}
function offon3(){
  echo"
<script type='text/javascript'>
function onoff3(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff3').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff3').value='On';
      root.style.filter = ' hue-rotate(0deg)';
  }else{
    document.getElementById('onoff3').value='Off';
    root.style.filter = ' hue-rotate(90deg)';
  }
}
</script>";
}
function offon4(){
  echo"
<script type='text/javascript'>
function onoff4(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff4').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff4').value='On';
      root.style.filter = '  blur(0px)';
  }else{
    document.getElementById('onoff4').value='Off';
    root.style.filter = '  blur(2px)';
  }
}
</script>";
}
function offon5(){
  echo"
<script type='text/javascript'>
function onoff5(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff5').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff5').value='On';
      root.style.filter = ' grayscale(0%)';
  }else{
    document.getElementById('onoff5').value='Off';
    root.style.filter = ' grayscale(100%)';
  }
}
</script>";
}
function offon6(){
  echo"
<script type='text/javascript'>
function onoff6(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff6').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff6').value='On';
      root.style.transform = 'rotateY(0deg)';
  }else{
    document.getElementById('onoff6').value='Off';
    root.style.transform = 'rotateY(180deg)';
  }
}
</script>";
}


add_action( 'init','adddropdown');
add_action( 'wp_footer', 'offon1' );
add_action( 'wp_footer', 'offon2' );
add_action( 'wp_footer', 'offon3' );
add_action( 'wp_footer', 'offon4' );
add_action( 'wp_footer', 'offon5' );
add_action( 'wp_footer', 'offon6' );
