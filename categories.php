<?php
require("header.php");
?>
<!--carousel à refaire ?!!! + ajouter nom des catégories + images cliquables !-->
  <div>Nos categories</div>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
    </div>
    <section>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/antipasti/antipasto-board-with-ham-cheese-nuts-honey.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/images_the_district/category/pizza_cat.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/images_the_district/category/pasta_cat.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pasta/forkful-steaming-spaghetti-with-shiny-noodles-hint-tomato-sauce.jpg" class="d-block w-100"
            alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/dessert/blueberries-pieces-pie-with-flowers.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/boisson/aerial-view-various-coffee.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span>Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span>Next</span>
      </button>
  </div>
  </section>
  <!--liste des catégories + image cliquable. Double image ? défilement des images quand mouse hover?
            titre des catégories = Nos pizzas , Nos burgers etc-->
            <?php require"footer.php"; ?>
</body>

</html>