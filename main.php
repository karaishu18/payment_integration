<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial scale=1.0">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Dreamers</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Castoro&family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Noto+Serif&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
  <section class="header">
    <nav>
      <a href="index.html">
        <img src="https://thumbs.dreamstime.com/b/print-161420195.jpg">   
      </a>
      <div class="nav-links" id="navLinks">
        <i style="font-size:24px" class="fa" onclick="hideMenu()">&#xf00d;</i>
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>
      <i style="font-size:24px" class="fa" onclick="showMenu()">&#xf03a;</i>
    </nav>
    <div class="text-box">
      <h1>THE DREAMERS</h1>
      <P>One step closer for the dreamers!</P>
      <a href="http://localhost/payment_integration/index.php#" class="hero-btn">DONATE NOW</a>
    </div>
  </section>
  <!-----------Objective------------->
  <section>
    <div class="row1" >
      <div class="col1">
        <h2>We work unitely and raise donations for Developed World</h2>
        <p>Our approach is rooted in years of on-the-ground experience, driven by a careful methodology and powerful by a deep passion to improve
           the lives of children and give them a chance to grow them a chance to grow up in a family.<br>
           We believe in collaboration as we know this work is bigger than any one organisation. We are part of a global network
           of nonprofit organization leading the worldwide movement.</p>
        <br>
        <a href="" class="second-btn">LEARN MORE</a>
      </div>
      <div class="col1">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/zcruIov45bI" title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
      </div>
    </div>
  </section>
  <!------------Footer------------------>
  <footer class="footer">
    <div class="row5">
      <div class="col5">
        <h4>About</h4>
        <br>
        <ul>
          <li><a href="">Causes</a></li><br>
          <li><a href="">About</a></li><br>
          <li><a href="">New Campaign</a></li><br>
          <li><a href="">Site Map</a></li><br>
          <li><a href="">Events</a></li><br>
        </ul>
      </div>
      <div class="col5">
        <h4>Explore</h4>
        <br>
        <ul>
          <li><a href="">Press Release</a></li><br>
          <li><a href="">Contact</a></li><br>
          <li><a href="">Bolg Posts</a></li><br>
          <li><a href="">Social Connect</a></li><br>
          <li><a href="">Help Topics</a></li><br>
        </ul>
      </div>
      <div class="col5">
        <h4>Links</h4>
        <br>
        <ul>
          <li><a href="">Podcasts</a></li><br>
          <li><a href="">Privacy Policy</a></li><br>
          <li><a href="">Videos</a></li><br>
          <li><a href="">Terms Of Use</a></li><br>
          <li><a href="">Events</a></li><br>
        </ul>
      </div>
      <div class="col5">
        <h4>Blog</h4>
        <br>
        <ul>
          <li><a href="">Care For All People</a></li><br>
          <li><a href="">Bulid School For Kids</a></li><br>
          <li><a href="">Being Volunteer</a></li><br>
          <li><a href="">Raise Fund To Help</a></li><br>
        </ul>
      </div>
      <div class="col5">
        <h4>Contact</h4>
        <br>
        <ul>
          <li><a href="">660 Broklyn Street,88 New</a></li><br>
          <li><a href="">York</a></li><br>
          <li><a href="">Needhelp@Moksham.Com</a></li><br>
          <li><a href="">666 888 0000</a></li><br><br><br>
          <i class="fa fa-twitter-square" style="font-size:36px"></i>
          <i class="fa fa-facebook-square" style="font-size:36px"></i>
          <i class="fa fa-instagram" style="font-size:36px"></i>
          <i class="fa fa-linkedin-square" style="font-size:36px"></i>
          <br><br>
        </ul>
      </div>
    </div>
  </footer>
  </section>
  <!-------JavaScript for Toggle Menu------->
  <script>
  var navLinks = document.getElementById("navLinks");
  function showMenu(){
    navLinks.style.right = "0";
  }
  function hideMenu(){
    navLinks.style.right = "-300px";
  }
  </script>
</body>
</html>
