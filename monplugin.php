<?php
/*
Plugin Name: Mon premier plugin
Description: Ceci est mon premier plugin
Author: Yo
Version: 1.0
*/

function adddropdown(){
  printf('
  <section class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Effets
  </button>
  <section class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff1" onclick="onoff1();">negatif</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff2" onclick="onoff2();">sepia</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff3" onclick="onoff3();">chroma 90°</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff4" onclick="onoff4();">flou</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff5" onclick="onoff5();">gris</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff6" onclick="onoff6();">rotate</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff7" onclick="onoff7();">skew</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff8" onclick="onoff8();">verticaltext</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff9" onclick="onoff9();">bounceright</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff10" onclick="onoff10();">bouncebot</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff11" onclick="onoff11();">textflick</label>
    <label class="dropdown-item text-light"><input type="button" value="On" id="onoff12" onclick="onoff12();">textglow</label>
  </section>
</section>
  ');
  echo "
<style type='text/css'>
#dropdownMenuButton{
  position = fixed ;
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
      root.style.transform = 'rotate(0deg)';
  }else{
    document.getElementById('onoff6').value='Off';
    root.style.transform = 'rotate(180deg)';
    root.style.transition = 'transform 1s ease-in-out';
  }
}
</script>";
}
function offon7(){
  echo"
<script type='text/javascript'>
function onoff7(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff7').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff7').value='On';
      root.style.transform = '';
  }else{
    document.getElementById('onoff7').value='Off';
    root.style.transform = 'skew(10deg)';
      root.style.transition = 'transform 1s ease-in-out';
  }
}
</script>";
}
function offon8(){
  echo"
<script type='text/javascript'>
function onoff8(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff8').value;
  if(currentvalue == 'Off'){
    document.getElementById('onoff8').value='On';
      root.style.writingMode = '';
  }else{
    document.getElementById('onoff8').value='Off';
      root.style.writingMode = 'vertical-lr';
  }
}
</script>";
}
function offon9(){
  echo"
<script type='text/javascript'>
function onoff9(){

  root = document.querySelectorAll('div');
  currentvalue = document.getElementById('onoff9').value;
  if (currentvalue == 'Off') {
    document.getElementById('onoff9').value= 'On';
for (let i=0; i < root.length ; i++) {
  root[i].style.animation = 'slide-left 0.5s cubic-bezier(0.600, -0.280, 0.735, 0.045) infinite alternate both';
}
}
else {
  document.getElementById('onoff9').value= 'Off';
  for (let i=0; i < root.length ; i++) {
    root[i].style.animation = '';
  }
}
}

</script>
<style type='text/css'>

@keyframes slide-left {
  0% {
    -webkit-transform: translateX(0px);
            transform: translateX(0px);
  }
  100% {
    -webkit-transform: translateX(50px);
            transform: translateX(50px);
  }
}

</style>";
}
function offon10(){
  echo"
<script type='text/javascript'>
function onoff10(){
  root = document.querySelectorAll('div');
  currentvalue = document.getElementById('onoff10').value;
  if (currentvalue == 'Off') {
    document.getElementById('onoff10').value= 'On';
for (let i=0; i < root.length ; i++) {
  root[i].style.animation = 'slide-bottom 0.5s cubic-bezier(0.600, -0.280, 0.735, 0.045) infinite alternate-reverse both';
}
}
else {
  document.getElementById('onoff10').value= 'Off';
  for (let i=0; i < root.length ; i++) {
    root[i].style.animation = '';
  }
}
}
</script>
<style type='text/css'>

@keyframes slide-bottom {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(50px);
            transform: translateY(50px);
  }
}
</style>";
}
function offon11(){
  echo"
<script type='text/javascript'>
function onoff11(){
  root = document.getElementById('titlemusic');
currentvalue = document.getElementById('onoff11').value;
if (currentvalue == 'Off') {
  document.getElementById('onoff11').value= 'On'
  root.style.animation = '';
}
else {
    document.getElementById('onoff11').value= 'Off'
    root.style.animation = 'text-flicker-in-glow 3s linear infinite alternate both';
}


}
</script>
<style type='text/css'>

@keyframes text-flicker-in-glow {
  0% {
    opacity: 0;
  }
  10% {
    opacity: 0;
    text-shadow: none;
  }
  10.1% {
    opacity: 1;
    text-shadow: none;
  }
  10.2% {
    opacity: 0;
    text-shadow: none;
  }
  20% {
    opacity: 0;
    text-shadow: none;
  }
  20.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.25);
  }
  20.6% {
    opacity: 0;
    text-shadow: none;
  }
  30% {
    opacity: 0;
    text-shadow: none;
  }
  30.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25);
  }
  30.5% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25);
  }
  30.6% {
    opacity: 0;
    text-shadow: none;
  }
  45% {
    opacity: 0;
    text-shadow: none;
  }
  45.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25);
  }
  50% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25);
  }
  55% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.45), 0 0 60px rgba(255, 255, 255, 0.25);
  }
  55.1% {
    opacity: 0;
    text-shadow: none;
  }
  57% {
    opacity: 0;
    text-shadow: none;
  }
  57.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35);
  }
  60% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35);
  }
  60.1% {
    opacity: 0;
    text-shadow: none;
  }
  65% {
    opacity: 0;
    text-shadow: none;
  }
  65.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35), 0 0 100px rgba(255, 255, 255, 0.1);
  }
  75% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.35), 0 0 100px rgba(255, 255, 255, 0.1);
  }
  75.1% {
    opacity: 0;
    text-shadow: none;
  }
  77% {
    opacity: 0;
    text-shadow: none;
  }
  77.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.4), 0 0 110px rgba(255, 255, 255, 0.2), 0 0 100px rgba(255, 255, 255, 0.1);
  }
  85% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.55), 0 0 60px rgba(255, 255, 255, 0.4), 0 0 110px rgba(255, 255, 255, 0.2), 0 0 100px rgba(255, 255, 255, 0.1);
  }
  85.1% {
    opacity: 0;
    text-shadow: none;
  }
  86% {
    opacity: 0;
    text-shadow: none;
  }
  86.1% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.6), 0 0 60px rgba(255, 255, 255, 0.45), 0 0 110px rgba(255, 255, 255, 0.25), 0 0 100px rgba(255, 255, 255, 0.1);
  }
  100% {
    opacity: 1;
    text-shadow: 0 0 30px rgba(255, 255, 255, 0.6), 0 0 60px rgba(255, 255, 255, 0.45), 0 0 110px rgba(255, 255, 255, 0.25), 0 0 100px rgba(255, 255, 255, 0.1);
  }
}

</style>";
}

function offon12(){
  echo"
<script type='text/javascript'>
function onoff12(){
  root = document.documentElement;
  currentvalue = document.getElementById('onoff12').value;
  if (currentvalue == 'Off') {
    document.getElementById('onoff12').value = 'On';
    root.style.animation = '';
  }
else {
  document.getElementById('onoff12').value = 'Off';
  root.style.animation = 'glow 1s ease-in-out infinite alternate';
}

}
</script>
<style type='text/css'>

@keyframes glow {
  0%{
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #0AE600, 0 0 40px #0AE600, 0 0 50px #0AE600, 0 0 60px #0AE600, 0 0 70px #0AE600;
  }
  100%{
    text-shadow: 0 0 20px #fff, 0 0 30px #E7FF4D, 0 0 40px #E7FF4D, 0 0 50px #E7FF4D, 0 0 60px #E7FF4D, 0 0 70px #E7FF4D, 0 0 80px #E7FF4D;
  }
}
</style>";
}
// root.style.filter = 'brightness(200%) contrast(120%) saturate(120%) hue-rotate(20deg) drop-shadow(30px 30px 40px yellow) invert(150%)';

add_action( 'init','adddropdown');
add_action( 'wp_footer', 'offon1' );
add_action( 'wp_footer', 'offon2' );
add_action( 'wp_footer', 'offon3' );
add_action( 'wp_footer', 'offon4' );
add_action( 'wp_footer', 'offon5' );
add_action( 'wp_footer', 'offon6' );
add_action( 'wp_footer', 'offon7' );
add_action( 'wp_footer', 'offon8' );
add_action( 'wp_footer', 'offon9' );
add_action( 'wp_footer', 'offon10' );
add_action( 'wp_footer', 'offon11' );
add_action( 'wp_footer', 'offon12' );
