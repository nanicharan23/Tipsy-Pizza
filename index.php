<!DOCTYPE html>

<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title></title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link rel="stylesheet" href="style.css">
          <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&family=Satisfy&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Lato:wght@100&family=Montserrat+Alternates:wght@100&display=swap" rel="stylesheet">
<script>
     $("#signup-link").click(function() {
  $('html, body').animate({
    scrollBottom: $("#signup-position").offset().top
  }, 1000);
})
     </script>
     </head>
     <body>
     <!--Navbar-->    
          <nav class="navbar navbar-custom navbar-expand-lg  navbar-dark shadow bottom">
               <div class="container">
                    <a href="index.html" class="navbar-brand" style="color:black;">Tipsy Pizza <img src="pizza-icon.svg" style="width:40px;height:auto;"></a>
                    <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navBarMenu">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                    <div class="collapse navbar-collapse" id="navBarMenu">
                         <ul class="navbar-nav nav-fill items">
                              <li class="nav-item" ><a href="index.html" class="nav-link navItems" style="color:black;">Home</a></li>
                              <li class="nav-item"><a href="#signup-position" class="nav-link navItems" style="color:black;">SignUp</a></li>
                              <li class="nav-item"><a href="#login-position" class="nav-link navItems" style="color:black;">Login</a></li>
                              <li class="nav-item"><a href="#" class="nav-link navItems" style="color:black;">Order</a></li>
                              <li class="nav-item"><a href="#" class="nav-link navItems" style="color:black;">About</a></li>
                         </ul>
                    </div>
               </div>
          </nav>
     <!--Banner-->
     <div class="container">
          <div class="jumbotron jumbotron-fluid custom-jumbo">
                  <div class="container">
                    <h1 class="display-4 ban-head">Hasta la pizza, Baby!</h1>
                    <hr class="my-4 ban-line" style="background-color: white;">
                    <p class="lead ban-cap">Do good. Be nice. Order pizza. Repeat.</p>
               </div>
          </div>
     </div>
     <!--Discount-->
     <div class="container">
               <div class="row">
                    <div class="col text-center shadow bg-light">
                                   <div class="discount">Discount - 30% <img src="discount.svg" style="width:40px;height:auto; margin-bottom:20px;"></div>
                         </div>
                    </div>
          </div>
     <div class="container">
          <div class="row mt-5">
                    <div class="col text-center shadow mx-2">
                         <div class="my-4">
                         <img src="map.svg" style="width:100px;height:auto;">
                         <h2 class="emoji-text">Live Order Tracking</h2>
                         <hr class="m-0">
                         <small class="lead">Know where your order is at all times,<br> from the restaurant to your doorstep</small>
                         </div>
                         </div>
                         <div class="col text-center shadow mx-2">
                              <div class="my-4">
                              <img src="food-delivery.svg" style="width:100px;height:auto;">
                              <h2 class="emoji-text">Fast Delivery</h2>
                              <hr class="m-0">
                              <small class="lead">Experience Tipsy Pizza's superfast<br> delivery for food delivered fresh & on time</small>
                              </div>
                              </div>
               </div>
               <div class="row mt-5">
                    <div class="col text-center shadow mx-2">
                         <div class="my-4">
                         <img src="free.svg" style="width:100px;height:auto;">
                         <h2 class="emoji-text">Free Food</h2>
                         <hr class="m-0">
                         <small class="lead">Get free food for you first order below 200/-.</small>
                         </div>
                         </div>
                         <div class="col text-center shadow mx-2">
                              <div class="my-4">
                              <img src="online-payment.svg" style="width:100px;height:auto;">
                              <h2 class="emoji-text">Easy Payments</h2>
                              <hr class="m-0">
                              <small class="lead">Many any kind of payments which are convinient to you.</small>
                              </div>
                              </div>
               </div>
     </div>

     <div class="container h-100">
          <div class="row h-100 justify-content-center align-items-center" id="signup-position">
               <div class="col-12 col-sm-6 text-center signup-left mt-5" style="height:300px;">
                    <h2 class="signup ">SIGN UP <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:10px; " fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                       </svg></h2>
                    </div>
                    <div class="col-12 col-sm-6 signup-right mt-5">
                         <form method="POST">
                              <div class="form-group">
                              <input type="text" class="form-control glyphicon-ok" placeholder="Enter Username.." name="uname">
                              </div>
                              <div class="form-group">
                              <input type="password" name="pw" class="form-control" placeholder="Enter Password.." aria-describedby="userHelp">
                              <p class="form-text text-muted" style="font-size:10px;">Minimum of 8 characters..</p>
                              </div>
                              <div class="form-group">
                              <input type="password" name="rpw" class="form-control" placeholder="Enter Password Again..">
                              </div>
                              <br>
                              <div class="text-center ">
                              <button type="submit" class="signup-btn" name="signup">SIGN UP</button>
                              </div>
                              </form>
                              <?php
                                   include 'signup.php';
                              ?>
                         </div>
               </div>
          </div>


          <div class="container h-100">
               <div class="row h-100 justify-content-center align-items-center" id="login-position">
                         <div class="col-12 col-sm-6 signup-right mt-5 order-sm-1 order-2">
                              <form class="form-group">
                                   <input type="text" class="form-control" placeholder="Enter Username..">
                                   <input type="password" class="form-control" placeholder="Enter Password..">
                                   <br>
                                   <div class="text-center ">
                                   <button type="submit" class="signup-btn">LOGIN</button>
                                   </div>
                                   </form>
                              </div>
                              <div class="col-12 col-sm-6 text-center signup-left mt-5 order-sm-2 order-1" style="height:300px;">
                                   <h2 class="signup ">LOGIN <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 10px;" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg></h2>
                                   </div>
                    </div>
               </div>


  
  
  
  
  
  
  
  
  
  
  
  
  
     <!--Footer-->
          <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
               <footer>
                   <div class="row my-5 justify-content-center py-5">
                       <div class="col-11">
                           <div class="row ">
                               <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                                   <h3 class="text-muted mb-md-0 mb-5 bold-text" style="font-family: 'Goblin One', cursive;">Tipsy Pizza.</h3>
                               </div>
                               <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                   <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                                   <ul class="list-unstyled">
                                       <li>Home</li>
                                       <li>About</li>
                                       <li>Blog</li>
                                       <li>Portfolio</li>
                                   </ul>
                               </div>
                               <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                   <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                                   <p class="mb-1">3-75/9, MANJEERA ROAD</p>
                                   <p>GANGARAM, HYDERABAD</p>
                                   <p>+91-7093058788</p>
                               </div>
                           </div>
                           <div class="row ">
                               <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                                   <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Tipsy Pizza All Rights Reserved.</small>
                               </div>
                               <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                                   <h6 class="mt-55 mt-2 text-muted bold-text"><b>SRI CHARAN</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> tscharan23@gmail.com</small>
                               </div>
                               <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                                   <h6 class="text-muted bold-text"><b>AISHWARYA</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> a.aishwarya14jan@gmail.com</small>
                               </div>
                           </div>
                       </div>
                   </div>
               </footer>
           </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
     </body>
</html>