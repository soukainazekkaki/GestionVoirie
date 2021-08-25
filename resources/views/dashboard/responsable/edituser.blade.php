@extends('layouts.page')
@section('content') 


<div class="jumbotron">
  <div class="container text-center">
  <div class="container">
    <h3>Modifier les données d'utilisateur </h3>      
    <p><i class="fa fa-pencil-square-o" aria-hidden="true"></i></p>
  </div>
</div>
</div>
<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            
          
          <form action="{{ route('responsable.updateuser',$users->id) }}" method="post">

          @csrf

<!-- on utilise tjrs cette methode quand on veut modifier les données -->
<!-- cette methode nous permet de faire le mise à jour des données de user -->
 @method ('PUT') 
          
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"><i class="fa fa-user" aria-hidden="true"></i> Nom *</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  value="{{$users->email}}">
                </div>
              </div>


        <div class="row">
                <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary">Modifier <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
</div>
</div>
</div>
</div>
</div>

@endsection