<?php

session_start();
if(!isset($_SESSION['Username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>LOGIN and LOGOUT</title>
    <style>
        body{
            background: url(https://wallpaperaccess.com/full/1152513.jpg);
            background-size: cover;
        }
        h2{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .media-heading{
            text-decoration: underline;
            color: chartreuse;
        }
        h3,p{
            color: black;
        }
    </style>
</head>
<body>
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
            <a href="#" class="navbar-brand"><strong>Laravel</strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="https://laravel.com/">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span> </a>
                 <ul class="dropdown-menu">
                    <li><a href="https://spark.laravel.com/">Spark</a></li>
                    <li><a href="https://laravel.com/docs/9.x/horizon">Horizon</a></li>
                    <li><a href="https://nova.laravel.com/">Nova</a></li>
                 </ul>
            </li>
            <li><a href="https://laravel-news.com/">News</a></li>
            <li><a href="https://laravel-news.com/newsletter">Newsletter</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
        <li><a href="logoutfromall.php"><span class="glyphicon glyphicon-log-out"></span> Log-out from all devices</a></li>
        </ul>
        <form action="" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="search" name="search" id="search" class="form-control" name="search">
            </div>
            <button type="submit" class="btn btn-success" name="button">Search</button>
        </form>
    </div>
   </nav>
   <div class="container" style="height: 50%; width: 50%;">
    <h2>Laravel</h2>  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
  
      
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-rounded" src="https://www.komododigital.co.uk/app/uploads/2021/04/Laravel-Feature-Image-1024x683.png" alt="Los Angeles" style="width:100%; height: 100%;">
          <div class="carousel-caption">
            <h3>LARAVEL</h3>
            <p>PHP FRAMEWORK</p>
          </div>
        </div>
  
        <div class="item">
          <img class="img-rounded" src="https://dazonn.com/wp-content/uploads/2022/08/Laravel-Development-1024x683.jpg" alt="Chicago" style="width:100%; height: 100%;">
          
        </div>
      
        <div class="item">
          <img class="img-rounded" src="https://www.isyncevolution.com/blog/wp-content/uploads/2021/07/The-Best-Codeigniter-Development-Services-Company-in-India-1024x683.jpg" alt="New york" style="width:100%; height: 100%;">
          
        </div>
         <div class="item">
          <img class="img-rounded" src="https://www.bairesdev.com/wp-content/uploads/2021/11/Laravel-8-1024x683.png" alt="Chicago" style="width:100%; height: 100%;">
          <div class="carousel-caption">
            <h3>Easy to learn?</h3>
            <p>Yeahhhhh...!!!</p>
          </div>
        </div>
      </div>
  
     
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <br><br>
  <div class="container">
    <h3>Laravel</h3>
  
    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">Open Expl</button>
  
    
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Laravel</h4>
          </div>
          <div class="modal-body">
            <p>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div> 
      </div>
    </div>
    <br><br>
    <div class="media">
        <div class="media-left">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">Monolith or API — the choice is yours.</h4>
          <p>Build robust, full-stack applications in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React or Vue driven frontend by pairing Laravel with Inertia.

            Or, let Laravel serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes.</p>
        </div>
      </div>
      <hr>
      <div class="media">
        <div class="media-body">
          <h4 class="media-heading">Write code for the joy of it.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="media-right">
            <img class="img-rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv1snHYbqaSv_hQTt48D2F8XEPwJTDePK6jw&usqp=CAU" class="media-object" style="width:130px">
          </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Authentication</h4>
                <button class="btn btn-success" data-toggle="collapse" data-target="#box">Click Here</button>
                <div id="box" class="collapse" style="background-color: rgb(213, 85, 17); color: black;">
                <p>Stop sweating authentication. Laravel provides scaffolding for secure, session based authentication, while Laravel Sanctum provides painless authentication for APIs and mobile applications.</p>
                </div>
            </div>
        </div>
      </div>
</body>
</html>