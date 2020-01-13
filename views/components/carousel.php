<!-- page author: Kevin Sutherland -->
<div class="container main">
    <div class="container middlewrap">
        <h1>Carousel</h1>
    </div>
</div>
<main class="image-carousel">
    <figure class="image-carousel-fig">
        <button class="arrow-left arrow"></button>
        <button class="arrow-right arrow"></button>
        <div class="carousel-title old">
            <div class="title"><h1>Slideshow</h1></div>
            <p class="description">Slide Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class="carousel-link" href="#" target="_blank">Learn More</a>
        </div>
        <img id="carousel-img" class="carousel-display old" src="<?php echo BASE_TEMPLATE_IMAGE_URL;?>Images/Home/maxresdefault.jpg" alt="carousel image">
        <div id="carousel-controls" class="carousel-controls">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="overlay"></div>
    </figure>
</main>
<script src="<?php echo BASE_JS_URL;?>carousel.js"></script>
