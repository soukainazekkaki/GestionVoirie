<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestion responsable</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- favicon (cad logo qui est s'affiche dans l'onglet de la page) -->
<link rel="icon" type="img/png" href="{{ asset('iconOnglet/img/favicon.ico') }}"/>

  <style>
  
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
  
.jumbotron{
    background-color: #F0FFFF;
    
}
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }

  label {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    
    border: 0;
    font-size: 14px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }

  option {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    
    border: 0;
    font-size: 14px !important;
    letter-spacing: 4px;
  }

  .btn {
    padding: 10px 20px;
    background-color: #F0FFFF;
    color: #008B8B;
    border-radius: 0;
    transition: .2s;
  }
  button{
    font-family: Montserrat, sans-serif;  
    font-size: 12px !important;
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
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        
        <li><a href="{{ route('admin.gestioncompte') }}">Gestion des comptes</a></li>


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
            <li> {{ Auth::guard('admin')->user()->name }} </li>
            <li> <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
                                     <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form> </li> 
          </ul>
        </li>

        

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h3>Ajouter un nouveau responsable </h3>      
    <p><i class="fa fa-plus" aria-hidden="true"></i></p>
  </div>
</div>

<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            
          <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"><i class="fa fa-user" aria-hidden="true"></i> Nom *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="saisissez le nom ">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="saisissez l'email ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="commune" class="col-form-label">Commune</label>
                  <select class="custom-select" id="commune" name="commune">
    <option selected>Choisir...</option>
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
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Mot de passe</label>
                         <input type="password" class="form-control" name="password" placeholder="Saisir un mot de passe" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary">Ajouter à la liste <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
            <div class="col-md-20 col-sm-20 col-20">
																<div class="btn-group">

                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Liste des responsables <i class="fa fa-list-ol" aria-hidden="true"></i></button>
																<!-- had le lien kaydina la page dyal add professeur li3ndna f sidebar -->
                                                                
																	<!-- <a href="{{ route('responsable.addvoirie')}}" id="addRow"
																		class="btn btn-info" data-toggle="modal" data-target="#myModal">
																		Liste des responsables <i class="fa fa-list-ol" aria-hidden="true"></i>
																	</a> -->
																</div>
															</div>
                                                            

          </div>
        </div>
      </div>
    </div>

</div>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Liste Des responsables</h4>
        </div>
        <div class="modal-body">
          

        <table class="tableau-style">

<thead>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Commune</th>
        <th>Action</th>
    </tr>
</thead>


<tbody>
    <tr>
        <td>Contenu</td>
        <td>Contenu</td>
        <td>Contenu</td>
        <td><a href="#"class="btn btn-info btn-xs" style="background-color:#20B2AA;">
        <i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
                                                                    
                                                                    
                                                                    <a href="#" class="btn btn-info btn-xs" style="background-color:DodgerBlue;"> 
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a>
                                                                        <!-- pour afficher les informations en détaille pour chaque prof --> 
                                                                        <a href="#"
                                                                        class="btn btn-info btn-xs">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i> Voir</a></td>
    </tr>
    <tr>
        <td>Contenu</td>
        <td>Contenu</td>
        <td>Contenu</td>
        <td>Contenu</td>
    </tr>
    </tbody>

</table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




</body>

</html>