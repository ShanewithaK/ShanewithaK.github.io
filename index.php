<?php include "includes/head.php"; ?>

  <body>
    <section id="cover">
      <div id="cover-caption">
        <div class="container">
          <div class="col-sm-10 col-sm-offset-1">
            <br />
            <a href="#nav-main" class="btn btn-secondary-outline btn-small" role="button">&darr;</a>
          </div>
        </div>
      </div>
    </section>

    <nav class="navbar navbar-dark" style="background-color: #191718;" id="nav-main">
      <a class="navbar-brand" href="index.php">
        <img src="imgs/homeIcon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Homepage
      </a>
      <a class="navbar-brand" href="profile.php">
        <img src="imgs/profileIcon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Profile
      </a>
      <a class="navbar-brand" href="show.php">
        <img src="imgs/videosIcon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Animations
      </a>
      <a class="navbar-brand" href="#">
        <img src="imgs/audioIcon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Audio
      </a>
    </nav>

    <section id="carousel"> <!-- SLIDES -->
      <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-home" data-slide-to="1"></li>
          <li data-target="#carousel-home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100 h-50" src="imgs/welcomeSB.png" alt="First slide">
            <div class="carousel-caption">
              <h3>Welcome to</h3>
              <h2>Stop Bath</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imgs/aboutSB.png" alt="Second slide">
            <div class="carousel-caption">
              <h3>About Us</h3>
              <p>Stop Bath is the home base for collaborations</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imgs/community.png" alt="Third slide">
            <div class="carousel-caption">
              <h3>Community</h3>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section id="videolist"> <!-- VIDEO LIST -->
          <h2>Top Videos This Week</h2>
          <ul class="list-unstyled">
            <li class="media">
              <img class="d-flex mr-3" src="imgs/calhobs.png" alt="Generic placeholder image">
              <div class="media-body container-fluid">
              <h5 class="mt-0 mb-1">Calvin and Hobbes dance</h5>
                <h6>by Adam Brown</h6>
                This is a fan interpretation of Calvin and Hobbes' dance moves, made for fun and no money. The music is 'April Showers' by ProleteR
              </div>
            </li>
            <li class="media my-4">
              <img class="d-flex mr-3" src="imgs/salad1.jpg" alt="Salad Finger Ep.1">
              <div class="media-body container-fluid">
              <h5 class="mt-0 mb-1">Salad Fingers : "Spoons"</h5>
                <h6>by David Firth</h6>
                Please support me on PATREON https://www.patreon.com/davidfirth New Salad Fingers Tshirts for 2017 !! https://brainfeeder.shop/collections/...
              </div>
            </li>
            <li class="media">
              <img class="d-flex mr-3" src="imgs/rtaaChrisep.png" alt="Chris'S Fake Fiance">
              <div class="media-body container-fluid">
              <h5 class="mt-0 mb-1">RTAA - Chris' Fake Fiance</h5>
                <h6>by Rooster Teeth</h6>
                Chris arrives early for his Tinder date, and is roped into saving a complete stranger from her pursuer. Together, they come up with a lie that may deter the man, but Chris might get more than he bargained for in return.
              </div>
            </li>
          </ul>
        </div>
        <!-- Featured Artsists -->
        <div class="row">
          <div class="col-md-4">
            <h3>Featured Artist</h3>
            <ul class="list-unstyled">
              <li class="featured">
                  <img class="featpic" src="imgs/davidfirth.jpg" alt="David Firth Profile">
                <div class="media-body">
                  <h5 class="feattitle">David Firth</h5>
                </div>
              </li>
              <li class="featured">
                <div class="media-body">
                  <img class="featpic" src="imgs/montyo.jpg" alt="Monty Oum Profile">
                  <h5 class="feattitle">Monty Oum</h5>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </section>


<?php include "includes/footer.php"; ?>
