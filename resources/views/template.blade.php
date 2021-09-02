<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page principale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
    font-size: 25px;
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
  .round-img {
    width: 10rem;
    height: 10rem;
    border-radius: 30%;
    object-fit: cover; 
    transform: translateY(-0.5rem); 
}
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #A52A2A;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
    font-family: Georgia, serif
  }
  .btn:hover, .btn:focus {
    border: 1px solid #808080;
    background-color: #fff;
    color: #000;
    font-family: Georgia, serif
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
    border-color: #A52A2A;
  }
  textarea {
    resize: none;
  }
  .hey {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 22px;
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
      <img src="images/icon-geometre.png" alt="" width="40" height="24" class="d-inline-block align-text-top">
      GVCD Company
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('template')}}">Accueil</a></li>
        
        <li><a href="#service">Services</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <!-- pour l'inscription -->
         
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">S'inscrire comme
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> @if (Route::has('admin.register')) <a href="{{ route('admin.register') }}">Administrateur</a> @endif </li> 
            <li> @if (Route::has('responsable.register')) <a href="{{ route('responsable.register') }}">Responsable Communal</a> @endif </li>
            <li> @if (Route::has('user.register')) <a href="{{ route('user.register') }}">Utilisateur</a> @endif </li> 
          </ul>
        </li>

        <!-- pour se connecter en tant que -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Se connecter en tant que
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> @if (Route::has('admin.login')) <a href="{{ route('admin.login') }}">Administrateur</a> @endif </li>
            <li> @if (Route::has('responsable.login')) <a href="{{ route('responsable.login') }}">Responsable Communal</a> @endif </li>
            <li> @if (Route::has('user.login')) <a href="{{ route('user.login') }}">Utilisateur</a> @endif </li> 
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicateurs -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- pour les slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/voirie.jpg" alt="voirie" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Voirie</h3>
          <p>Les voies communales sont les voies du domaine public routier communal classées. </p>
        </div>      
      </div>

      <div class="item">
        <img src="images/voirie1.jpg" alt="voirie1" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Les permissions de voirie</h3>
          <p>La commune est propriétaire du sous-sol des voies communales.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/voirie2.jpg" alt="voirie2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Design de voirie</h3>
          <p>La voie comprend la chaussée, les accotements, fossés, talus de remblai ou de
déblai.
</p>
        </div>      
      </div>
    </div>

    <!-- control de gauche et droite -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Contenu -->
<div id="contenu" class="container text-center">
  <h3>Voirie communale et ses dépendances</h3>
  <p><em>Présentation</em></p>
  <p><< GVCD Company >> est spécialisée dans la gestion des voiries communaux et ses dépendances offre des solutions en :  .</p>
  <br>
  <p>  Emprise du domaine public routier communal </p> <br>
  <p>  Entretien des voies communales </p> <br>
  <p>  Dispositions relatives à la coordination des travaux exécutés sur les voies communales
 situées à l'extérieur des agglomérations </p> <br>
  <p>  Dispositions relatives aux travaux affectant le sol et le sous-sol des voies communales </p> <br>
  <p>  Dispositions applicables au cas où il existe un établissement public de coopération
 intercommunale  </p> <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#" data-toggle="collapse">
        <img src="images/geovoirie.jpg" class="img-circle person" alt="Nom Voirie" width="255" height="255">
      </a>
      <div id="para" class="collapse">
        <p>Petite description</p>
        <p>Traitée par qui ?</p>
        <p>Date de traitement</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#" data-toggle="collapse">
        <img src="images/geovoirie1.png" class="img-circle person" alt="NOM VOIRIE" width="255" height="255">
      </a>
      <div id="para2" class="collapse">
        <p>Petite description</p>
        <p>Traitée par qui ?</p>
        <p>Date de traitement</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#" data-toggle="collapse">
        <img src="images/geovoirie2.png" class="img-circle person" alt="Nom de Voirie" width="255" height="255">
      </a>
      <div id="para3" class="collapse">
        <p>Petite description</p>
        <p>Traitée par qui ?</p>
        <p>Date de traitement</p>
      </div>
    </div>
  </div>
</div>

<!-- Services-->
<div id="service" class="bg-1">
  <div class="container">
    <h3 class="text-center">SERVICES</h3>
    <p class="text-center"><img src="images/Serviceimage.jpg" class="round-img" alt="SERVICE" ><br></p>
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/data-collection.png" alt="SERVICE1" width="200" height="100">
          <p><strong>Collecte et Enquête</strong></p>
          <p>GVCD vous offre son expertise et son savoir faire pour récupérer toute information à caractère géographique .</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Savoir plus</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/webmap.png" alt="SERVICE2" width="400" height="300">
          <p><strong>WEBMAPPING</strong></p>
          <p>Assistance pour performer les processus, faire une meilleure synthèse et analyse de tous les besoins.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Savoir plus</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/SIG.jpg" alt="SERVICE3" width="400" height="300">
          <p><strong>SIG</strong></p>
          <p>Assistance pour la mise en place des Systèmes d'Informations Géographiques (SIG) depuis l'étude des besoins jusqu'au déploiment.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Savoir plus</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Entrer en contact avec nous en remplissant le formulaire ci-dessous</em></p>

  <div class="row">
    <div class="col-md-4">
      <div class="row">
      <p class="hey"><strong>Appelez-nous</strong></p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +212 544 913 621 </p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +212 511 012 389 </p>

    </div>
    <div class="row">
      <p class="hey"><strong>Empalacement</strong></p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 34, Avenue Tarik, Ibn Ziad,<br> Etage 2 Au dessus d'Orange Drissia, <br> Tanger 90060</p>
    </div>

    <div class="row">
      <p class="hey"><strong>Adresse Email</strong></p>
      <p> Vous pouvez nous envoyer vos questions à travers cette adresse email: <br><span class="glyphicon glyphicon-envelope"></span> Email: mail@1234.com </p>
    </div>
    
       </div>
    
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nom" name="naom" placeholder="*Votre nom" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="*votre Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="prenom" name="prenom" placeholder="*Votre prènom" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="*votre numèro téléphone" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="message" name="message" placeholder="*Votre message" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-3 form-group">
          <button class="btn pull-right" type="submit">Soumettre</button>
        </div>
      </div>
    </div>
  </div>
  
</div>

<!-- Image of location/map -->
<!-- <img src="map.jpg" class="img-responsive" style="width:100%"> -->


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Menu</h4>
  	 			<ul>
  	 				<li><a href="{{ route('template')}}">Accueil</a></li>
  	 				<li><a href="#service">Services</a></li>
  	 				<li><a href="#contact">Contact</a></li>
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
  	 				<li><a href="#"><img src="images/gestion.png" alt="Sgestion" width="200" height="100"></a></li>
  	 				
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