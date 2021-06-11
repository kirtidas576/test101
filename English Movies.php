<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English movies</title>
    <link rel="stylesheet" href="Engmov.css">
    <link rel="stylesheet" href="">
    <script></script>
    <script></script>
    <link rel="shortcut icon" href="2024750.jpg">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <a href="" class="logo">
           <img src="wp6794197-breaking-bad-4k-wallpapers.jpg" alt="Breaking bad">
        </a>
        <ul class="menu">
           <li><a href="#">Home</a></li>
           <li><a href="#">Thriller</a></li>
           <li><a href="#">Science</a></li>
           <li><a href="#">Horror</a></li>
           <li><a href="#">Drama</a></li>
           <li><a href="#">Other</a></li>
        </ul>
        <div class="search">
           <input type="text" placeholder="Search here...">
           <i class="fas fa-search"></i>
        </div>
    </nav>
    <section id="main">
        <h1 class="showcase-heading">showcase</h1>
       
        <ul id="autoWidth" class="cs-hidden">
              <li class="item-a">
                <div class="showcase-box">
                   <img src="l-1.jpg" alt="None">
                </div>
              </li>
              <li class="item-a">
                <div class="showcase-box">
                   <img src="l-2.jpg" alt="None">
                </div>
              </li>
              <li class="item-a">
                <div class="showcase-box">
                   <img src="l-3.jpg" alt="None">
                </div>
              </li>
              <li class="item-a">
                <div class="showcase-box">
                   <img src="l-4.jpg" alt="None">
                </div>
              </li>
              <li class="item-a">
                <div class="showcase-box">
                   <img src="l-5.jpg" alt="None">
                </div>
              </li>
        </ul>

        <div class="showcase-box">
           <img src="wp4056399-dark-netflix-wallpapers.jpg" alt="None">
        </div>
    </section>
    <section id="latest">
     <h2 class="latest-heading">Latest Movies</h2>
     <ul id="autoWidth" class="cs-hidden">
              <li class="item-a">
                <div class="latest-box">
                 <div class="latest-b-image">
                   <img src="wp4056399-dark-netflix-wallpapers.jpg" alt="None">
                </div>
                <div class="latest-b-text">
                 <strong>Kin 2018</strong>
                 <p>Action Movie</p>
              </div>
            </div>
              </li>
     </ul>
    </section>
    <script>
      $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
    </script>
</body>
</html>