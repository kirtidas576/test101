<!DOCTYPE html>
<html>
<head>
     <title>Entertainment</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style2.css">
  <link rel="shortcut icon" href="Logo1.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css">
  <style>
    
  </style>
</head>
<body>
<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" data-title="Hello" data-intro="Hey Welcome !">
    <div class="carousel-item active">
      <img src="MDTFW0j-pirates-of-the-caribbean-wallpapers.jpg" alt="Pirates of the Caribean" width="1600" height="500" controls>
      <div class="carousel-caption">
        <h5>Pirates of the caribean</h5>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="1284838.png" alt="Persuit of happiness" width="1600" height="500" controls>
      <div class="carousel-caption">
        <h5>Persuit of happiness</h5>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="wp4056399-dark-netflix-wallpapers.jpg" alt="Dark" width="1600" height="500" controls>
      <div class="carousel-caption">
        <h5>Dark</h5>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-3">
    <div class="py-5">
        <h2 class="text-center container-fluid" data-title="Hello" data-intro="Hey Welcome !">About Us</h2>
    </div>
    <div class="container-fluid">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
             <img src="https://source.unsplash.com/600x300/?movies" class="img-fluid aboutimg rounded" data-title="Hello" data-intro="Hey Welcome !">
           </div>
           <div class="col-lg-6 col-md-6 col-12">
             <h3 class="display-4" data-title="Hello" data-intro="Hey Welcome !">This is for you ;)</h3>
             <p class="py-3" data-title="Hello" data-intro="Hey Welcome !">Its for all who loves movies,musics,webseries. There you go it is all yours!!!</p>
             <a href="about.php" class="btn btn-success">Check More</a>
           </div>
         </div>
    </div>
</section>
<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="wp1830265-pirates-of-the-caribbean-wallpapers.jpg" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">Pirates of he Caribian</h4>
                <p class="card-text">Part2</p>
                <a href="poc1.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="wp6581266-money-heist-2020-4k-wallpapers.jpg" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">Angrezi Medium</h4>
                <p class="card-text">Hindi</p>
                <a href="angrezim.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
               <img class="card-img-top" src="wp1935737-13-reasons-why-wallpapers.jpg" alt="Card image">
               <div class="card-body">
                <h4 class="card-title">13 Reasons Why</h4>
                <p class="card-text">Series</p>
                <a href="13rsw.php" class="btn btn-primary">Watch Movie/Download</a>
               </div>
            </div>
             
          </div>
          
       </div>
       
    </div>
</section>

<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Galary</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
             <img src="wp6794197-breaking-bad-4k-wallpapers.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="wp4056399-dark-netflix-wallpapers.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="2024741.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="1268943.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="1103717.jpg" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="2024750.jpg" class="img-fluid pb-4">
           </div>
           
      </div>
       
    </div>
</section>

<section class="my-3">
    <div class="py-3">
        <h2 class="text-center">Suggesions</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
         <div class="form-group">
          <label>Username</lable>
          <input type="text" name="user" autocomplete="off" class="form-control ml-50" cols="100" rows="10">
         </div>
        <div class="form-group">
          <label>Email Id</lable>
          <input type="text" name="email" autocomplete="off" class="form-control" cols="10" rows="10">
        </div>
        <div class="form-group">
          <label>Mobile</lable>
          <input type="text" name="mobile" autocomplete="off" class="form-control" cols="10" rows="10">
        </div>
        <div class="form-group">
          <label>Suggestins</lable>
          <textarea class="form-control" name="comment" cols="70" rows="5">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

         
      </form>
    </div>
</section>

<footer>
<ul>
 <li><a href="https://www.google.co.in/">Google</li>
 <li><a href="https://www.facebook.com">Facebook</li>
 <li><a href="https://www.youtube.com">Youtube</li>
 <li><a href="www.instagram.com">Instagram</li>
 <li><a href="www.twitter.com">Twitter</li>
</ul>
   <p class="p-3 bg-dark text-white text-center">This is all</p>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
  <script src="dm.js"></script>
  <script>
   introJs().start();
  </script>
</body>
</html>