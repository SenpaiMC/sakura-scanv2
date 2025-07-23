<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="Omniscient Reader's Viewpoint.jpg" alt=""><p>Omniscient Reader's Viewpoint</p></div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    <div class="swiper-slide">Slide 4</div>
    <div class="swiper-slide">Slide 5</div>
    <div class="swiper-slide">Slide 6</div>
  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>
<br>

<div class="barre">
    <div class="contenue"><p>Calendrier <br> <br> Aujourd'hui</p></div>  
</div>

<div class="barre">
    <div class="calendrier"><img src="Omniscient Reader's Viewpoint.jpg" alt=""> <br><p>Omniscient Reader's Viewpoint</p></div>
    <div class="calendrier"></div>
    <div class="calendrier"></div>
    <div class="calendrier"></div>
    <div class="calendrier"></div>
</div>
<br>

<section>
    <button>Dernière sortie</button>
</section>

<div class="barre">
    <div class="contenue"><p>Dernière sortie</p></div>
</div>

<div id="sortie">
    <div class="contenue3">
        <p>Sortie 1</p>
    </div>
    <div class="contenue3">
        <p>Sortie 2</p>
    </div>
    <div class="contenue3">
        <p>Sortie 3</p>
    </div>
    <div class="contenue3">
        <p>Sortie 4</p>
    </div>
    <div class="contenue3">
        <p>Sortie 5</p>
    </div>
    <div class="contenue3">
        <p>Sortie 6</p>
    </div>

</div>

<?php include 'includes/footer.php'; ?>



    <script>
        
const swiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 20,    
    centeredSlides: true,
    direction: 'horizontal',
    loop: true,
    // Make the centered (active) slide scale up, others scale down
    on: {
        slideChangeTransitionStart: function () {
            this.slides.forEach(slide => slide.style.transform = "scale(0.75)");
            if (this.slides[this.activeIndex]) {
                this.slides[this.activeIndex].style.transform = "scale(1)";
                this.slides[this.activeIndex].style.transition = "transform 0.7s";
            }
        },
        init: function () {
            this.slides.forEach(slide => slide.style.transform = "scale(0.75)");
            if (this.slides[this.activeIndex]) {
                this.slides[this.activeIndex].style.transform = "scale(1.0)";
                this.slides[this.activeIndex].style.transition = "transform 0.7s";
            }
        }
    },

//  Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});

// Optional: Auto-slide every 7 seconds using Swiper API
 setInterval(() => {
    swiper.slideNext();
 }, 7000);

</script>
</body>
</html>