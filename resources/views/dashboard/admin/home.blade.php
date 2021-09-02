<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page principale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <!-- Pour que les fontawsome it9raw-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  
  <!-- favicon (cad logo qui est s'affiche dans l'onglet de la page) -->
<link rel="icon" type="img/png" href="{{ asset('iconOnglet/img/favicon.ico') }}"/>
  
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); 
    width: 100%; 
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
      <img src="{{ asset('images/icon-geometre.png') }}" alt="" width="40" height="24" class="d-inline-block align-text-top">
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        
        <li><a href="#">Gestion des comptes</a></li>


        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notifications {{ Auth::guard('admin')->user()->unreadNotifications->count() }} 
        <span class="caret"></span></a> 
          <ul class="dropdown-menu">
          @foreach (Auth::guard('admin')->user()->unreadNotifications as $notification)
            <li>
                
            <a href="#">Le compte qui porte le numéro {{ $notification->data['responsableid'] }}
               son propriétaire {{ $notification->data['responsablename'] }}
               et sa commune {{ $notification->data['responsablecommune'] }} 
               et son email {{ $notification->data['responsableemail'] }} 
               attend votre confirmation de son compte</a>
                 
             </li>
           @endforeach 
          </ul>
        </li>
      
        
        
        <!-- pour l'inscription -->
          
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Compte
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> Administrateur </li> 
            <li><i class='fa fa-user'style='font-size:24px;margin-right:6px'></i> {{ Auth::guard('admin')->user()->name }} </li>
            <li> <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
                                     <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form> </li> 
          </ul>
        </li>

        

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- <div class= "content-wrapper">
@yield('content')
</div> -->


<!-- Contenu -->
<div id="band" class="container text-center">
  <h3>Page D'administrateur !!!!!!!!!!!!!!!!!!!!!!!!</h3>
  <p><em>.................</em></p>
  <p>Statistiques des personnes qui sont actives</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Nom de voirie 1</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="exemple.jpg" class="img-circle person" alt="nom" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Posté par qui ?</p>
        <p>Une petite description</p>
        <p>La date </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Nom de voirie 2</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="exemple2.jpg" class="img-circle person" alt="Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Posté par qui ?</p>
        <p>Une petite description</p>
        <p>La date</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Nom de voirie 3</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="exemple2.jpg" class="img-circle person" alt="Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Posté par qui ?</p>
        <p>Une petite description</p>
        <p>La date</p>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>SIG WEB <a href="https://www.companygvcd.com" data-toggle="tooltip" title="Savoir plus">www.companygvcd.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  
  $('[data-toggle="tooltip"]').tooltip(); 
  
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    
    if(this.hash !== "") {

     
      event.preventDefault();

      
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    }
   endif
  });
})
</script>

</body>

</html>