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
  
  .nav-tabs li a {
    color: #777;
  }
 
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 10;
    background-color: #FFFFF0;
    border: 0;
    font-size: 12px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #808080 !important;
  }
  .navbar-nav li a:hover {
    color: #000000 !important;
    
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }

  /* Hada mnin kanclikéw 3la dropdown */
  .open .dropdown-toggle {
    color: #fff;
    background-color: #FFE4C4 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  /* Mnin kan7to ydina 3la deconnexion*/
  .dropdown-menu li a:hover {
    background-color: #FFE4C4 !important;
  }


/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

/* pour la coleur de background de body */ 
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




/* Pour le profile */
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));  
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 4rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 6px;
    padding-left: 6px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

.container {
    padding: 80px 80px;
  }
  
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }


  .btn {
    padding: 10px 20px;
    background-color: #FFDAB9;
    color: #696969;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #696969;
    background-color: #B0C4DE;
    color: #000;
  }
  .submit {
    padding: 10px 20px;
    background-color: #FFDAB9;
    color: #696969;
    border-radius: 0;
    transition: .2s;
  }
  .submit:hover, .submit:focus {
    border: 1px solid #696969;
    background-color: #B0C4DE;
    color: #000;
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
</div>
</nav>


<div class="container">
<div id="band" class="container text-center">

  <h3><i class="fa fa-user" aria-hidden="true"></i> Mon Profile</h3>
 <br>
  <div class="row">
    
         
  <form  action="{{ route('responsable.updateprofile') }}" method="post">

@csrf


          <div class="row gutters-sm">
            
            <div class="col-md-11">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><label class="mdl-textfield__label" for="name" style="text-align:left;">Nom</label></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    
                    <input id ="name" type="text" name="name" value="{{ Auth::guard('responsable')->user()->name }}"  />
                    
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><label class="mdl-textfield__label" for="email" style="text-align:left;">Email</label></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="email" value="{{ Auth::guard('responsable')->user()->email }}"  />
                    
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><label class="mdl-textfield__label" for="commune" style="text-align:left;">Commune</label></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="commune" value="{{ Auth::guard('responsable')->user()->commune }}"  />
                    
                    </div>
                  </div>
                  <hr>
    
                  
                  <div class="row">
                    <div class="col-sm-12">
                      
                      
                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                     Enregistrer</button>

</form>
                    </div>
                  </div>
                </div>
              </div>

              
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
</div>

<!-- The Modal S'affiche quand les données sont enregistrées avec succés -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modification Done</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
        Les données sont bien modifiés.

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</body>
</html>