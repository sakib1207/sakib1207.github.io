<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="saksak.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<header class="w3-display-container w3-content w3-center"  >
  <div class="w3-content w3-display-container" style="left: -27.5%" >
  <img class="mySlides1" src="https://www.digitaldesignjournal.com/wp-content/uploads/2018/07/Python-Programming-Wallpaper-1.jpg" width="1520" height="650" >
  <img class="mySlides1" src="https://www.digitaldesignjournal.com/wp-content/uploads/2018/07/Programming-World-Map-Wallpaper.jpg" width="1520" height="650">
  <img class="mySlides1" src="https://www.digitaldesignjournal.com/wp-content/uploads/2018/07/Code-Digital-Art.jpg" width="1520" height="650">
  <body background="https://d5vf6134d8ffdnfp1qv4rv3l-wpengine.netdna-ssl.com/wp-content/uploads/scifi2.jpg">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" >
</div>
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center"  style="left: 80%">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Sakib Hasan Nishat</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">Sakib Hasan Nishat</h5>
    <h3 class="w3-hide-medium w3-hide-small">Web Designer|Cryptographer|Programmer</h3>
  </div>
 
</header>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-30px";
  }
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

</script>
<style>
.buttonload {
  background-color: #4CAF50; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}
@import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
* {
  margin: 0;
  padding: 0;
}
html, body {
  height: 100%;
}
section {
  position: relative;
  width: 100%;
  height: 15%;
}
section::after {
  position: absolute;
  bottom: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 80%;
  background: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
  background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
}
section h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #fff;
  font : normal 300 64px/1 'Josefin Sans', sans-serif;
  text-align: center;
  white-space: nowrap;
}



#thanks {
  background-color: #fff;
}
#thanks::after {
  content: none;
}
#thanks div {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
#thanks h2 {
  margin-bottom: 60px;
  color: #333;
  font : normal 300 64px/1 'Josefin Sans', sans-serif;
  text-align: center;
  white-space: nowrap;
}
#thanks p {
  color: #333;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
}
#thanks p a {
  color: #333;
  text-decoration: none;
  transition: color .3s;
}
#thanks p a:hover {
  color: #888;
}
.demo a {
  position: absolute;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
  letter-spacing: .1em;
  text-decoration: none;
  transition: opacity .3s;
}
.demo a:hover {
  opacity: .5;
}



#section01 a {
  padding-top: 60px;
}
#section01 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section02 a {
  padding-top: 60px;
}
#section02 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section02 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section03 a {
  padding-top: 60px;
}
#section03 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section03 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
#section03 a span::before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  content: '';
  width: 44px;
  height: 44px;
  box-shadow: 0 0 0 0 rgba(255,255,255,.1);
  border-radius: 100%;
  opacity: 0;
  -webkit-animation: sdb03 3s infinite;
  animation: sdb03 3s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}



#section04 a {
  padding-top: 60px;
}
#section04 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb04 2s infinite;
  animation: sdb04 2s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb04 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    -webkit-transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
}
@keyframes sdb04 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    transform: rotate(-45deg) translate(0, 0);
  }
}



#section05 a {
  padding-top: 70px;
}
#section05 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb05 1.5s infinite;
  animation: sdb05 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb05 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb05 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}



#section06 a {
  padding-top: 70px;
}
#section06 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
  -webkit-animation: sdb06 1.5s infinite;
  animation: sdb06 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb06 {
  0% {
    -webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb06 {
  0% {
    transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}



#section07 a {
  padding-top: 80px;
}
#section07 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb07 2s infinite;
  animation: sdb07 2s infinite;
  opacity: 0;
  box-sizing: border-box;
}
#section07 a span:nth-of-type(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
#section07 a span:nth-of-type(2) {
  top: 16px;
  -webkit-animation-delay: .15s;
  animation-delay: .15s;
}
#section07 a span:nth-of-type(3) {
  top: 32px;
  -webkit-animation-delay: .3s;
  animation-delay: .3s;
}
@-webkit-keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}



#section08 a {
  padding-top: 60px;
}
#section08 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section08 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  box-sizing: border-box;
}



#section09 a {
  padding-top: 20px;
}
#section09 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section09 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section09 a span::after {
  position: absolute;
  bottom: -18px;
  left: 50%;
  width: 18px;
  height: 18px;
  content: '';
  margin-left: -9px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section10 a {
  padding-top: 60px;
}
#section10 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section10 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 8px;
  height: 8px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: sdb10 2s infinite;
  animation: sdb10 2s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb10 {
  0% {
    -webkit-transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    -webkit-transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb10 {
  0% {
    transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

#navbar {
  background-color: #195;
  position: absolute;
  top: -20px;
  width: 100%;
  overflow: auto;
  transition: top 0.4s;
}

#navbar a {
  float: left;

 top: 10px;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
  position:relative;

}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>
</head>

<style>
  
  #menu ul
   { 
    margin-left: -2.5em;
    position: fixed;
    position:right;
  
     top: -10px;
      left: 14px;
  }
 
#menu li 
{ 
 list-style-type: none; 
  width: 7em;  
  text-align: center;
    float: left; 
}
 
#menu a 
{ 
 text-decoration: none; 
  color: black; 
   display: block; 
    background-color: #EEEEFF;
      box-shadow: 5px 5px 5px gray;
        margin-bottom: 2px;  
        margin-right: 2px; 
         border-radius: 5px; 
          border: 3px outset #EEEEFF; 
      }
 
#menu a:hover
 {  
  background-color: green;
    box-shadow: 3px 3px 3px gray;
      border: none; 
  }
  .rounded
  {
    top: -10%;
    width: 300px;
      margin: auto;

  }
  .rounded img
  {
    border-radius: 50%;
  }
  .mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

  
<style>

  body
  {
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
margin: 0;
padding: 0;
background: url(https://images.wallpaperscraft.com/image/macbook_pro_apple_laptop_headphones_table_98893_2560x1080.jpg);
height: 1080px;

background-attachment: fixed;

  }

@import url('https://fonts.googleapis.com/css?family=Pacifico|Sacramento|Srisakdi:700');
  body
  {
    margin: 0;
    padding: 0;
    background: url(https://images.wallpaperscraft.com/image/macbook_pro_apple_laptop_headphones_table_98893_2560x1080.jpg);
    background-size: cover;
    font-family:'Quicksand', sans-serif;

  }

  
  .login-box
  {
    width: 420px;
    height: 420px;
     
   
    
    top: 140%;
    left: 20%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    text-align: center;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
      color: #fff;
    background:rgba(0,0,0,0.4);
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%; 
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;



  }
  .login-box:hover
  {
    background: black;
  }
  .about
  {
    background: url(https://images.wallpaperscraft.com/image/macbook_pro_apple_laptop_headphones_table_98893_2560x1080.jpg);
    width: 1400px;
    height: 620px;
    background:rgba(0,0,0,0.5);;
    color: #fff;
    top: 619.5%;
    left: 45%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             ;
  }
  .about img
  {
    float: left;
  }
  

  .inside1
  {
    width: 400px;
    height: 280px;
    background:rgba(0,0,0,0.5);;
    color: #fff;
    top: 43%;
    left: 70%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
              transform: rotate(17deg);
              -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s
  }
  .inside1:hover
  
    {
    background: black;
  }
  .inside2
  {
    width: 400px;
    height: 280px;
    background:rgba(0,0,0,0.5);;
    color: #fff;
    
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             top: 43%;
    left: 40%;
              transform: rotate(-17deg);
              -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s
  }
  .inside2:hover
  
    {
    background: black;
  }
  .body img
  {
    top: 54%;
    left: 60%;
  }
  .avater
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }
  .search input:hover 
  {
    
    color: blue;

  }



.login-box1
  {
    width: 420px;
    height: 420px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 140%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-box1:hover
  
    {
    background: black;
  }
  .avater1
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }


.login-box2
  {
    width: 420px;
    height: 420px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 140%;
    left: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-box2:hover
  
    {
    background: black;
  }
  .avater2
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }

  
  
  .login-box5
  {
    width: 1020px;
    height: 220px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 695%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-box5:hover
  
    {
    background: white;
  }
  .login-box5 img:hover
  
    {
    background: green;
  }
  .avater5
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: absolute;
    top: -20px;
    left: 47%;
  }
.login-box5:hover
{
  color: #39dc79;
}
.login-box5 table
{
  position: absolute;
  padding: 0;
  box-sizing: 20px;
  left: 25%;
  color: transparent;
  -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;

}
.login-box6
  {
    width: 1020px;
    height: 250px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 318%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000;
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s; 
  }
  .login-box6:hover
  
    {
    background: gray;
  }
  .avater6
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: absolute;
    top: -25px;
    left: 48%;
  }
.problem
  {
    width: 400px;
    height: 280px;
    background:rgba(0,0,0,0.5);;
    color: #fff;
    top: 490%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
.problem:hover
  
    {
    background: black;
  }





</style>
<style>

  body
  {
margin: 0;
padding: 0;
background: url(https://images.wallpaperscraft.com/image/macbook_pro_apple_laptop_headphones_table_98893_2560x1080.jpg);
background-size: cover;
background-position: left;
font-family: sans-serif;

  }
  .login-2box
  {
    width: 420px;
    height: 520px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 250%;
    left: 20%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-2box:hover
  
    {
    background: black;
  }
  .avater2
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }


.login-2box1
  {
    width: 420px;
    height: 520px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 250%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000;
             border-radius: 7%; 
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-2box1:hover
  
    {
    background: black;
  }
  .avater21
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }


.login-2box2
  {
    width: 420px;
    height: 520px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 250%;
    left: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-2box2:hover
  
    {
    background: black;
  }
  .avater22
  {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    left: 35%;
  }


</style>
<style>
body
  {
margin: 0;
padding: 0;
background: url(https://images.wallpaperscraft.com/image/macbook_pro_apple_laptop_headphones_table_98893_2560x1080.jpg);
background-size: cover;
background-position: left;
font-family: sans-serif;

  }
  .login-box4
  {
    width: 420px;
    height: 610px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    top: 785%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 30px;
    font: bold italic 100% Garamond, Comic Sans MS, fantasy; 
    text-align: center;
    border: 1px solid black;
             box-shadow: 10px 10px 10px #000000; 
             border-radius: 7%;
             -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
  }
  .login-box4:hover
  
    {
    background: black;
  }
  .avater4    
  {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    position: absolute;
    top: -35px;
    left: 39%;
  }
  h3
  {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
  }
  .login-box4 p
  {
    margin: 0;
    padding: 0;
    font-weight: bold;
  }
  .login-box4 input
  {
    width: 100%;
    margin-bottom: 20px;
  }
  .login-box4 input[type="text"], input[type="password"]
  {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
  }
  .login-box4 input[type="submit"]
  {
    boder:none;
    outline: none;
    height: 40px;
    background: transparent;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
  }
  .login-box4 input[type="submit"]:hover
  {
       
       cursor: pointer;
       background: #39dc79;
       color:#000;
  }
 .login-box4 a
 {
 text-decoration: none;
 font-size: 14px;
 color: #fff;
 }

 .login-box4 a:hover
 {
  color: #39dc79;
 }
 .login-box4 input[type="Message"]
{
        boder:none;
    outline: none;
    height: 90px;
    background: transparent;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  cursor: pointer;
  position: fixed;
  top: 0%;
  left: 95%;
  
}

.dropdown {
  position: fixed;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
   top: 7%;
  left: 90%;
  position: fixed;
}
.dropdown-content:hover
{
 background-color: gray;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

 

}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.servicebox
{
  width:1400px;
  height: 687px;
 
  
             

}

.skbox
{
  width:1500px;
  height: 487px;

}
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
html {
    overflow: auto;
}

/* Let's get this party started */
::-webkit-scrollbar {
    width: 3%;
    height: 1%;
}
 
/* Track */
::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
   background: black;
    -webkit-border-radius: 30%;
    
    border-radius: 5%;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 0%;
    border-radius: 35%;
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
    -webkit-box-shadow: inset 0 0 8px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
  background: radial-gradient(circle, red, yellow, green);
}


.login-box i,.login-box1 i,.login-box2 i,.login-2box i,.login-2box1 i,.login-2box2 i,.problem i,.inside2 b,.inside1 b,.about strong{
    background: red;
    background: -webkit-linear-gradient(left, orange , yellow, green, cyan, blue, violet);
    background: -o-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: -moz-linear-gradient(right, orange, yellow, green, cyan, blue, violet);
    background: linear-gradient(to right, orange , yellow, green, cyan, blue, violet);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    
}


  </style>
}

  <header >

<div id="navbar">




  <ul><li><a href="#"><img src="https://cdn4.iconfinder.com/data/icons/mono-color-web-mobile/250/Home-512.png" height="20" width="20"></a></li>
                <li><a href="#service" style="text-decoration: none" font-family="spray">Services</a></li>        <li><a href="#skills" style="text-decoration: none">Skills</a></li>        <li><a href="#project" style="text-decoration: none">Projects</a></li>        
                   <li><a href="#problemsolving" style="text-decoration: none">Programming</a></li>
                   
                   <li><a href="#about" style="text-decoration: none">About Me</a></li>
                   <li><a href="#contact" style="text-decoration: none">Contact</a></li>
                   <table border="0"><tr><td>
<a href="https://www.facebook.com/hkrwrld"><img src="http://www.transparentpng.com/thumb/facebook-logo/new-facebook-logo-12.png" height="30" width="30" align="left"></a></td><td>

<a href="https://twitter.com/kitsakib"><img src="https://images.vexels.com/media/users/3/137419/isolated/preview/b1a3fab214230557053ed1c4bf17b46c-twitter-icon-logo-by-vexels.png" height="30" width="30" align="left"></a></td><td>

<a href="https://ruet.academia.edu/sakibhasan"><img src="https://universoabiertoblog.files.wordpress.com/2016/09/academia.png" height="30" width="30" align="left"></a></td><td>

<a href="https://www.linkedin.com/feed/?midToken=AQGYavMIzSMzkA&trk=eml-email_pymk_01-header-74-home&trkEmail=eml-email_pymk_01-header-74-home-null-blzl8c%7Ejsw0ybb8%7E7f-null-neptune%2Ffeed"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/768px-LinkedIn_logo_initials.png" height="30" width="30" align="left"></a></td><td>

<a href="https://github.com/sakib1207"><img src="https://unixtitan.net/images/github-svg-social-media-6.png" height="30" width="30" align="left"></a></td><td>

<a href="https://www.youtube.com/channel/UCTYTIhVuSH9r-j0O8wdYFXA?view_as=subscriber"><img src="http://pngimg.com/uploads/youtube/youtube_PNG9.png" height="30" width="30" align="left"></a></td><td>

<a href="https://www.pinterest.com/kitsakib/"><img src="https://cdn.freebiesupply.com/logos/thumbs/1x/pinterest-4-logo.png" height="30" width="30" align="left"></a></td><td>

<a href="https://www.instagram.com/sakib_d_rock/"><img src="http://pngimg.com/uploads/instagram/instagram_PNG8.png" height="30" width="30" align="left"></a></table></td></tr>
</table>
                     </ul>
</div>
 <section id="section03" class="demo">
  <a href="#service"><span></span>&darr;</a>
</section>
</header>
<body>
  
  <div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <ul><li><a href="#"><img src="https://cdn4.iconfinder.com/data/icons/mono-color-web-mobile/250/Home-512.png" height="20" width="20"></a></li>
                <li><a href="#service" style="text-decoration: none" font-family="spray">Services</a></li>        <li><a href="#skills" style="text-decoration: none">Skills</a></li>        <li><a href="#project" style="text-decoration: none">Projects</a></li>        
                   <li><a href="#problemsolving" style="text-decoration: none">Programming</a></li>
                   
                   <li><a href="#about" style="text-decoration: none">About Me</a></li>
                   <li><a href="#contact" style="text-decoration: none">Contact</a></li>

  
  </div>

</div>

<div class="servicebox" id="service">
   
  <h3><u>
  <br/><p align="center"><font color="green">SERVICES</font></p></u></h3>
  
<div class="login-box" id="service">
    <img src="https://pngimage.net/wp-content/uploads/2018/05/computer-software-png-2.png" class="avater">
  
  <br/>
  <b><font color="yellow"><p align="center">App Development</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i>
Criteria for selecting a development platform usually contains the target mobile platforms, existing infrastructure and development skills. When targeting more than one platform with cross-platform development it is also important to consider the impact of the tool on the user experience.Typically, cross-platform environments are reusable across multiple platforms, leveraging a native container while using HTML, CSS, and JavaScript for the user interface.</i></font>

</div>
<div class="login-box1" id="service">
    <img src="http://pluspng.com/img-png/web-design-png-file-png-image-426.png" class="avater1">
  
  <br/>
  <b><font color="yellow"><p align="center">Web Design and Developing</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i>
What is website design and why?
-For your any neccessity that may be for personal or bussiness attitude, a website can help you at that specific need.
I am willing to support you for building up a website for perfectly suit on your neccessity and its hope.
Thank you and welcome.



</i></font>

</div>
<div class="login-box2" id="service">
    <img src="http://chessrankings.com/wp-content/uploads/2018/06/benefits-of-website-design-benefits-of-web-designing-consultant-tech.png" class="avater2">
  
  <br/>
  <b><font color="yellow"><p align="center">Web Project</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i>
Web projects hold all of the web resources that you create, maintain, and use as you develop your web application. Web Project Manager If you like to lead and you want to work in the technology sector, you should consider becoming a web project manager.Developing an Effective Strategy for Your Web Project.I am willing to give the service for you.</i></font>

</div>
</div>
<div class="skbox" id="skills">
  
   <h1><u><br/><br/>
  <p align="center"><font color="green">SKILLS</font></p></u></h1>
  
<div class="login-2box" id="skills">
    <img src="https://pngimage.net/wp-content/uploads/2018/05/desarrollo-de-software-png-2.png" class="avater2">
  
  <br/>
  <b><font color="yellow"><p align="center">App and Web Development</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i><br/>
     I am currently doing some basics works on computer programming,software developing and web developing. I hope that, all of my works will be so far and good.
.</i></font>

</div>
<div class="login-2box1" id="skills">
    <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Prog-languages.png" class="avater21">
  
  <br/>
  <b><font color="yellow"><p align="center">Computer Language</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i>
"The more you learn, the more you can explore".
The more you know about the computer and then the more oppurtunity is to interact with computer.
I have experienced with so much language about the computer. For problem solving, i have experienced c,c++,java and python language. For data analysis, also i have learned pyhton matplotlib. For web design and development, i have learned php,css,jquery,javascript,html.
I have also experience on android studio for making android application.



</i></font>

</div>


<div class="login-2box2" id="skills">
    <img src="https://pngimage.net/wp-content/uploads/2018/05/cryptography-png-9.png" class="avater22">
  
  <br/>
  <b><font color="yellow"><p align="center">Cryptography</p></font></b><br/><br/><br/><br/><br/><br/><br/><br/>
  <font color="white"><i>
Life is like of lacking security challenge.Are you quite sure that your data and information is safe and secured?
It is not certain but you can secured your data and be secured by the fate of the cryptography that ensure safe and secured the whole world with cyfering. I have great experiance about cryptography.I have submitted my paper on the cryptography on accademia.com that helps people much.In that scope, i can help you to safe and secured your data that is in the risk zone. Thank you and welcome you.</i></font>

</div></div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="w3-container" id="project">
  
 
</div><p align="center">
<button class="buttonload">
  <i class="fa fa-circle-o-notch fa-spin"></i>Project
</button></p>
<div class="w3-content w3-display-container" style="max-width:1200px">
  <img class="mySlides" src="Screenshot (1738).png" width="1200px" height="500px">
  <img class="mySlides" src="Screenshot (1739).png" width="1200px" height="500px">
  <img class="mySlides" src="Screenshot (1740).png" width="1200px" height="500px">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)"><h1>prev</h1></div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)"><h1>next</h1></div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(3)"></span>
  </div>
</div>

<div class="problem" id="problemsolving">
  <p align="center"><font color="yellow"><u>Problem Solving</u></font><br/><br/><i>
Gaining experience on the programming languages like c,c++,java,python.
Most like: c++ and python for problem solving.</i><br/><br/><br/><a href="https://www.urionlinejudge.com.br/judge/en/profile/232846">
<img src="https://3.bp.blogspot.com/-w8N8oro54mE/V9FZNUyK_6I/AAAAAAAABTI/Tc_HGFJgjU8qftO4hYZFCYKt-MyL_1XzQCK4B/s1600/URI.png" height="50" width="50"></a>
<a href="https://codeforces.com/unsubscribe/contests/293ca9dbe1b3a8014343f621b21a69bd5d2a9be5/">
<img src="https://1.bp.blogspot.com/-QxUZLQ0d7YI/Wvg448YcpyI/AAAAAAAACEU/5Z-tEPcQricjxI_RrEkwayvzI8E0P_JDwCLcBGAs/s1600/codeforce.png" height="50" width="50"></a>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="about" id="about">
  <img src="20190213_000140.jpg" width="490";
    height="620">

  <p align="center"><font color="yellow"><strong>Sakib Hasan Nishat |Web Designer| Cryptographer| Programmer</strong></font></p>
<br/><p align="center">
I am Sakib Hasan Nishat. I am working on cryptography as a security challenge. I am a competitive programmer,a web designer and web developer. Also working on android application and game design. </p>
<p align="center"><b><font color="red"><br/>Education</font></b></p>
<div class="inside1" id="about">
  <p align="center"><font color="green">HSC</font>
  <br/><br/><b>Abdul Kadir Mollah City College<br/><br/>I have completeted my hsc from the renowned college of Bangladesh that gives me huge memory and showed me the actual way of learning.</b></p>
</div>
<div class="inside2" id="about">
<p align="center"><font color="green"><button class="buttonload">
  <i class="fa fa-spinner fa-spin"></i>Undergraduate
</button></font><br/><br/><b>  
Rajshahi University of Engineering and technology<br/><br/>
I am studying Computer Science and Engineering here.Mostly software,web developing and cryptography is the main goal of computer science for me.</b></p>

</div>
</div>
<div class="login-box5" id="contact">
    <img src="https://pngimage.net/wp-content/uploads/2018/05/conect-png-4.png" class="avater5">
  
  <br/>
  <b><font color="red"><p align="center"><b><br/>Connect With Me</b></p></font>
  


<br/><br/>

<table border="0"><tr><td>
<a href="https://www.facebook.com/hkrwrld"><img src="http://www.transparentpng.com/thumb/facebook-logo/new-facebook-logo-12.png" height="60" width="60" align="left"></a>
</td><td>
<a href="https://twitter.com/kitsakib"><img src="https://images.vexels.com/media/users/3/137419/isolated/preview/b1a3fab214230557053ed1c4bf17b46c-twitter-icon-logo-by-vexels.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://ruet.academia.edu/sakibhasan"><img src="https://universoabiertoblog.files.wordpress.com/2016/09/academia.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://www.linkedin.com/feed/?midToken=AQGYavMIzSMzkA&trk=eml-email_pymk_01-header-74-home&trkEmail=eml-email_pymk_01-header-74-home-null-blzl8c%7Ejsw0ybb8%7E7f-null-neptune%2Ffeed"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/768px-LinkedIn_logo_initials.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://github.com/sakib1207"><img src="https://unixtitan.net/images/github-svg-social-media-6.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://www.youtube.com/channel/UCTYTIhVuSH9r-j0O8wdYFXA?view_as=subscriber"><img src="http://pngimg.com/uploads/youtube/youtube_PNG9.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://www.pinterest.com/kitsakib/"><img src="https://cdn.freebiesupply.com/logos/thumbs/1x/pinterest-4-logo.png" height="60" width="60" align="left"></a>
</td>
<td>
<a href="https://www.instagram.com/sakib_d_rock/"><img src="http://pngimg.com/uploads/instagram/instagram_PNG8.png" height="60" width="60" align="left"></a>
</td>
</tr>

</table>

</div>
<br/><br/>


<div class="login-box4" id="contact">
    <img src="https://cdn4.iconfinder.com/data/icons/manager-6/332/Untitled-16-512.png" class="avater4">
    <br/><h3>Feedback</h3>
    <form method="post" action="u.php">
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter username"required="required">
      <p align="center"><lebel for="email">Email</lebel>
<input type="text" name="email"required="required"placeholder="please enter your email"/></p></lebel>
      <p>Message Box</p><br/><b>
      <input type="Message" name="Message" placeholder="Enter your message" row="4" required=""></b>
      <br/><br/>
      <input type="submit" name="submit" value="Send Message">
      <a href="#"><h3>Reset</h3></a>
    </form>
 

   <br/><br/><br/><br/><br/><br/>
  <font color="brown"><i>             
.</i></font>

</div></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

 

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/>
<p align="center"><u><font color="blue">LOCATION</font></u></p><br/>
<p align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.447468031729!2d88.62043661499315!3d24.365732484289648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefcfb0a4e4e3%3A0x81afc71770a4a88e!2sMonnafer+More!5e0!3m2!1sen!2sbd!4v1551903981720" width="1508" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
<section id="section10" class="demo">

  <a href="#"><span></span> &uarr;</a>
</section>
  <br/><br/>
  <p align="center"><font color="white">
    &copy;
  
<?php 
 echo "<b>Sakib Hasan</b>";
 echo date("\nY");
?>
</font>
</p>
</body>
</html>