<?php include "include/header.php"; ?>


<!-- SlideShow CSS -->
<style>
* {box-sizing: border-box}
body {font-family: url(https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap); margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: rgb(0, 204, 0);
  font-size: 60px;
  position: absolute;
  top: 20%;
  left: 3%;
  width: 100%;
}

/* Heading */
.imghead {
  color: red;
  font-size: 60px;
  position: absolute;
  top: 5%;
  left: 30%;
}

/* Button on Image - read more*/
.imgbtnr{
  font-size: 20px;
  position: absolute;
  padding: 10px 30px;
  top: 50%;
  left: 4%;
  background-color: yellow;
  border: none;
}

/* Button on Image - contact us*/
.imgbtnc{
  font-size: 20px;
  position: absolute;
  padding: 10px 30px;
  top: 50%;
  left: 20%;
  background-color: #FFF;
  border: none;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 650px) {
  .prev, .next,.text, .imghead, .imgbtnc, .imgbtnr {font-size: 30px}
}
@media only screen and (max-width: 500px) {
  .prev, .next,.text, .imghead, .imgbtnc, .imgbtnr {font-size: 11px}
  .imgbtnc, .imgbtnr {padding: 5px}
}
</style>


<br><br>

<!-- SlideShow -->
<div class="slideshow-container">

<div class="mySlides">
  <div class="imghead"> <b> DREAM LOTARY </b> </div>
  <img src="images/log.jpg" style="width:100%">
  <div class="text"> <b> FOR YOUR LIFE <br> ENJOY </b> </div>
  <div><a href="#"><input type="button" value="READ MORE" class="imgbtnr"></a></div>
  <div><a href="#"><input type="button" value="CONTACT US" class="imgbtnc"></a></div>
</div>

<div class="mySlides">
  <div class="imghead"> <b> DREAM LOTARY </b> </div>
  <img src="images/lot.jpeg" style="width:100%">
  <div class="text"> <b> FOR YOUR LIFE <br> ENJOY </b> </div>
  <div><a href="#"><input type="button" value="READ MORE" class="imgbtnr"></a></div>
  <div><a href="#"><input type="button" value="CONTACT US" class="imgbtnc"></a></div>
</div>

<div class="mySlides">
  <div class="imghead"> <b> DREAM LOTARY </b> </div>
  <img src="images/lott.jpg" style="width:100%">
  <div class="text"> <b> FOR YOUR LIFE <br> ENJOY </b> </div>
  <div><a href="#"><input type="button" value="READ MORE" class="imgbtnr"></a></div>
  <div><a href="#"><input type="button" value="CONTACT US" class="imgbtnc"></a></div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<!-- Slideshow script -->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<br><br>


<!-- Lotary Details Style -->

<style>
    .lydetail{
        text-align:center;
    }

    .amntcard{
        width: 50%;
        display: flex;
        justify-content: center;
    }
    .amntcard a{
        display: flex;
        color: black;
        text-decoration: none;
    }
    .card{
        padding: 30px;
        border: 1px solid grey;
        font-size: 50px;
    }
    .carddes{
        padding: 40px;
        border: 1px solid grey;
        background-color: #999;
        font-size: 30px;
    }
    @media only screen and (max-width: 400px) {
  .lydetail, .carddes {font-size: 11px}
  .card{font-size: 30px;}
  .card, .carddes{padding: 10px}
}
</style>

<!-- Lotary Details Code-->

<div class="lydetail">
    <h1>- LOTARY DETAIL -</h1>
</div>

<br>


<div style="display:flex;">
    <div class="amntcard">
        <a href="#">
            <div class="card"><i class="fa-solid fa-shield-halved"></i></div>
            <div class="carddes">JOINING AMOUNT 100</div>
        </a>
    </div>
    <div class="amntcard">
        <a href="#">
            <div class="card"><i class="fa-solid fa-shield-halved"></i></div>
            <div class="carddes">WINNING AMOUNT 250</div>
        </a>
    </div>
</div>

<br><br><br>

<?php include "include/footer.php"; ?>