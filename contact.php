<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h3{
  font-size: 30px;
  font-family: 'Benne', serif;
  color: #000;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #968e60;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ebd142;
}

.container {
  border-radius: 5px;
  background-color: #f7f7d5;
  padding: 20px;
}
/*----------------------Footer--------------------*/
.footer{
    width: 100%;
    margin: auto;
    text-align: center;
    padding-top: 30px;
    background-image: url(back5.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
  }
  .footer h4{
    color: #FBB404;
    font-size: 15px;
    font-weight: 300;
    font-family: 'Roboto Slab', serif;
    margin-left: 30px;
  }
  .row5{
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-top: 30px;
  }
  .col5{
    margin-right: 20px;
    margin-left: 20px;
    flex: 20%;
    background: transparent;
  }
  .footer h4{
    font-size: 25px;
    font-family: 'Roboto Slab', serif;
    color: #FBB404;
  }
  .footer ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
    text-align: left;
  }
  .footer ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 17px;
  }
  .footer ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #FBB404;
    display: block;
    margin: auto;
    transition: 0.5s;
  }
  .footer ul li:hover::after{
    width: 100%;
  }
  @media only screen and (max-width: 1000px) {
    .row5{
      flex-wrap: wrap;
    }
    .footer ul li{
      list-style: none;
      display: inline-block;
      padding: 3px 5px;
      position: relative;
      text-align: left;
    }
    .footer ul li a{
      color: #000;
      text-decoration: none;
      font-size: 10px;
    }
  }
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="user_input.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="subscriber_name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="fname" name="subscriber_email" placeholder="Your email address..">

    <label for="subject">Your Message</label>
    <textarea id="subject" name="subscriber_message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

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
          <li><a href="">Blog Posts</a></li><br>
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
          <li><a href="">660, New Delhi</a></li><br>
          <li><a href="">helpus@dreamer.com</a></li><br>
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

</body>
</html>
