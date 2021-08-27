<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="inner-header">
          <div class="logo">
            <a href="#" title="">
              <img src="./images/logo_corevestor.png" alt="logo" />
            </a>
          </div>

          <!-- Nav PC -->
          <ul id="main-menu">
            <li><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About</a></li>
            <li><a href="Resource.php">Resource</a></li>
            <li>
              <a href="javascript:;">Services</a>
              <ul class="sub-menu">
                <li><a href="Training.php">Training</a></li>
                <li><a href="business.php">Business</a></li>
              </ul>
            </li>
            <li><a href="news.php">News</a></li>
            <li><a href="Join.php">FAQ</a></li>
          </ul>

          <!-- Toggle mobile -->
          <input
            type="checkbox"
            hidden
            class="nav__input"
            id="nav-mobile-input"
          />
          <label for="nav-mobile-input" id="nav__bars-btn">
            <i class="fas fa-bars"></i>
          </label>

          <!-- Overlay tablet -->
          <label for="nav-mobile-input" class="overlay"></label>
          <!-- Nav mobile -->
          <ul id="nav__mobile">
            <div class="header-mobile">
              <a href="#"><img src="./images/logo_corevestor.png" alt="" /></a>
              <label for="nav-mobile-input" class="btn__close"
                ><i class="fas fa-times"></i
              ></label>
            </div>
            <li><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About</a></li>
            <li><a href="Resource.php">Resource</a></li>
            <li><a href="Training.php">Training</a></li>
             <li><a href="business.php">Business</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="Join.php">FAQ</a></li>
          </ul>
        </div>
      </div>
    </header>