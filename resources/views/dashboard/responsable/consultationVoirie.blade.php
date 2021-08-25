<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voirie</title>
    <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!--OpenLayers CSS -->
  <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/css/ol.css" type="text/css">

<!-- favicon (cad logo qui est s'affiche dans l'onglet de la page) -->
<link rel="icon" type="img/png" href="{{ asset('iconOnglet/img/favicon.ico') }}"/>

<!-- Style css for map -->
<link rel="stylesheet" href="{{ asset('carte/css/style.css') }}">


  <style>
      .nav-tabs li a {
    color: #777;
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

      </style>

      <!--Openlayers JS -->
      <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/build/ol.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"> <img src="{{ asset('images/icon-geometre.png') }}" alt="" width="40" height="24" class="d-inline-block align-text-top">  
      GVCD Company</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('responsable.profile') }}">Mon profile</a></li>
        <li><a href="{{ route('responsable.gestionCompte') }}">Gestion des utilisateurs</a></li>
        <li><a href="#">Notification</a></li>
        
        <li><a href="#">Voiries(consultation)</a></li>
        <li><a href="{{ route('responsable.allvoirie') }}">Gestion Voirie</a></li>
        
        <!-- pour l'inscription -->
         
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Compte
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> Responsable communale </li> 
            <li> {{ Auth::guard('responsable')->user()->name }} </li>
            <li> <a href="{{ route('responsable.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
                                     <form action="{{ route('responsable.logout') }}" id="logout-form" method="post">@csrf</form> </li> 
          </ul>
        </li>

        

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>





</body>
</html>