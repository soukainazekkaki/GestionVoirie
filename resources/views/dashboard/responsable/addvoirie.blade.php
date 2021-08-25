<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voirie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Pour que les fontawsome it9raw-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
    padding: 120px 120px;
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
    background-color: #F08080;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #F0FFFF;
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

  .container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}


.tableau-style  {
    border-collapse: collapse;
    min-width: 400px;
    width: auto;
    box-shadow: 0 5px 50px rgba(0,0,0,0.20);
    cursor: pointer;
    margin: 100px auto;
    border: 2px solid #FFEFD5;
    /* border: 1px solid #ddd;  */
}

thead tr {
    background-color: #FFEFD5;
    color: #000000;
    text-align: left;
}

th, td {
    padding: 15px 20px;
}

tbody tr, td, th {
    border: 1px solid #ddd;
}

tbody tr:nth-child(even){
    background-color: #f3f3f3;
}





/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: #F5F5DC;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 100%;
	margin: 0 5%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 84px;
	background: #ADD8E6;
	font-weight: bold;
	color: #2F4F4F;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 10px;
	margin: 10px 10px;
}
#msform .action-button a:hover {
display: block;
text-decoration: none;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: #ADD8E6;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
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
      <a class="navbar-brand" href="#myPage"> <img src="{{ asset('images/icon-geometre.png') }}" alt="" width="40" height="24" class="d-inline-block align-text-top">  
      GVCD Company</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('responsable.profile') }}">Mon profile</a></li>
        <li><a href="{{ route('responsable.gestionCompte') }}">Gestion des utilisateurs</a></li>
        <li><a href="#">Notification</a></li>
        <li><a href="{{ route('responsable.consultationVoirie') }}">Voiries(consultation)</a></li>
        <li><a href="{{ route('responsable.allvoirie') }}">Gestion Voirie</a></li>
        <!-- pour l'inscription -->
          
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Compte
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> Responsable communale </li> 
            <li><i class='fa fa-user'style='font-size:24px;margin-right:6px'>  </i> {{ Auth::guard('responsable')->user()->name }} </li>
            <li> <a href="{{ route('responsable.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
                                     <form action="{{ route('responsable.logout') }}" id="logout-form" method="post">@csrf</form> </li> 
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


<!-- Contenu-->
<div id="band" class="container text-center">
  <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter voirie </h3>
  <br>
  <div class="row">
    

  <!-- multistep form -->
<form id="msform" action="{{ route('responsable.ajout') }}" method="post">

@csrf

  <!-- progressbar -->
 <!-- <ul id="progressbar">
    <li class="active">Etape 1</li>
    <li>Etape 2</li>
    <li>Etape 3</li>
  </ul> -->
  <!-- fieldsets -->
  <fieldset>
    <h3 class="fs-subtitle">Information de voirie</h3>

    <label class="mdl-textfield__label" for="nomcommune" style="text-align:left;">Nom de la commune</label>
	  <select class="form-control" name="nomcommune">
  <option selected>Ouvrir ce menu de sélection</option>
  <option value="Harhoura">Harhoura</option>
  <option value="Shoul">Shoul</option>
  <option value="Lalla Mimouna">Lalla Mimouna</option>
  <option value="Arbaoua">Arbaoua</option>
  <option value="El Mansouria">El Mansouria</option>
  <option value="Had Soualem">Had Soualem</option>
  <option value="Bouznika">Bouznika</option>
  <option value="Dar Chaoui">Dar Chaoui</option>
  <option value="Targuist">Targuist</option>
  <option value="Ketama">Ketama</option>
</select>

    <label class="mdl-textfield__label" for="titre" style="text-align:left;">Titre</label>
    <input type="text" name="titre" placeholder="Entrez un titre"  />
    <div>
    <span class="text-danger">@error('titre'){{ $message }}@enderror</span><div>

    <label class="mdl-textfield__label" for="description" style="text-align:left;">Description</label>
    <textarea class="mdl-textfield__input" name="description" rows="4" id="description" placeholder="Entrez votre description"></textarea>
    <div>
    <span class="text-danger">@error('description'){{ $message }}@enderror</span><div>

    <label class="mdl-textfield__label" for="nomresponsable" style="text-align:left;">Nom de responsable</label>
    <input type="text" name="nomresponsable" placeholder="Entrez votre nom" />
    <div>
    <span class="text-danger">@error('nomresponsable'){{ $message }}@enderror</span><div>

    <label class="mdl-textfield__label" for="ville" style="text-align:left;">Ville</label>
	  <select class="form-control" name="ville">
  <option selected>Ouvrir ce menu de sélection</option>
  <option value="Rabat">Rabat</option>
  <option value="Salé">Salé</option>
  <option value="Kénitra">Kénitra</option>
  <option value="Casablanca">Casablanca</option>
  <option value="Tanger">Tanger</option>
  <option value="Tétouan">Tétouan</option>
  <option value="Al Hoceïma">Al Hoceïma</option>
  <option value="Settat">Settat</option>
  <option value="Marrakech">Marrakech</option>
  <option value="Safi">Safi‎</option>
</select>


<!-- pour les coordonnees en fichier 
<label class="mdl-textfield__label" for="coordonnees" style="text-align:left;">Coordonnées de voirie</label>

<div class="file-field">
    <div class="btn btn-pink btn-rounded btn-sm float-left">
	<span><i class="fas fa-upload mr-2" aria-hidden="true"></i></span>
      <input  type="file" name="coordonnees" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Choisir un fichier SHP">
    </div>
  </div> -->

  <div>
  <input type="text" name="x" placeholder="Saisir x" />
  <div>
    <span class="text-danger">@error('x'){{ $message }}@enderror</span><div>

  <input type="text" name="y" placeholder="Saisir y" />
  <div>
    <span class="text-danger">@error('y'){{ $message }}@enderror</span><div>
</div>

    <a href="{{ route('responsable.allvoirie')}}" class="annuler action-button" >Annuler </a>
    <input data-toggle="modal" data-target="#myModal" type="submit" name="submit" class="submit action-button" value="Ajouter" />
  </fieldset>
  
</form>
</div>

<!-- The Modal S'affiche quand les données sont enregistrées avec succés -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajout Done</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
        votre voirie a été postée.

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Menu</h4>
  	 			<ul>
  	 				<li><a href="{{ route('responsable.home')}}">Accueil</a></li>
  	 				<li><a href="#">Services</a></li>
  	 				<li><a href="#">Contact</a></li>
  	 				<li><a href="#">Inscription</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Contactez-nous</h4>
  	 			<ul>
  	 				<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 34, Avenue Tarik, Ibn Ziad,<br> Etage 2 Au dessus d'Orange Drissia, <br> Tanger 90060</a></li>
  	 				<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +212 511 012 389</a></li>
  	 				<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> mail@1234.com</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>About-nous</h4>
  	 			<ul>
  	 				<li><a href="#"><< GVCD Company >> est spécialisée dans la gestion des voiries communaux et ses dépendances offre plusieurs solutions</a></li>
  	 				<li><a href="#"><img src="{{asset('images/gestion.png') }}" alt="gestion1" width="200" height="100"></a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Suivez-nous</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>

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