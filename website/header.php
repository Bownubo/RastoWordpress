<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css">
<title>Rasto-Over-Rasto</title>
</head>
<div class="slideshow-container">
 <div class="mySlides fade">
   <div class="numbertext">1 / 3</div>
   <img src="./img/img1.jpg" style="width:100%">
   <div class="text">Caption Text</div>
 </div>

 <div class="mySlides fade">
   <div class="numbertext">2 / 3</div>
   <img src="./img/img2.jpg" style="width:100%">
   <div class="text">Caption Two</div>
 </div>

 <div class="mySlides fade">
   <div class="numbertext">3 / 3</div>
   <img src="./img/img3.jpg" style="width:100%">
   <div class="text">Caption Three</div>
 </div>

</div>
<br>























<script language="JavaScript">
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
