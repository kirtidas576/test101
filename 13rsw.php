<!DOCTYPE html>
<html>
<head>
 <style>
   h2{
       font-family: consolas;
       color: #CE5069;
       margin-left:30px;
       
   }
   .breadcrumbs{
    padding: 10px;
    font-family: sans-serif;
  }
  .breadcrumbs__item{
    display: inline-block;
  }
  .breadcrumbs__item:not(:last-of-type)::after{
    content: '/';
    margin: 0 5px;
    color: #7E75D5;
  }
  ul a{
     color: #499090;
  }
  ul a:hover{
     color: #EF197C;
  }
 </style>
</head>
<body>
<ul class="breadcrumbs">
 <li class="breadcrumbs__item">
   <a href="index.php" class="breadcrumbs__link">Home</a>
 </li>
 <li class="breadcrumbs__item">
   <a href="Bengali Movies.php" class="breadcrumbs__link breadcrumbs__link--active">Bengali movies</a>
 </li>
 <li class="breadcrumbs__item">
   <a href="" class="breadcrumbs__link breadcrumbs__link--active">13 Reasons why</a>
 </li>
</ul>

<h2>S01/E01 :</h2>

<video src="Money Heist S01E01.mp4" alt="nothing here" controls>
</body>
</html>