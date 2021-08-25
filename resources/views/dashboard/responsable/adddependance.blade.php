@extends('layouts.page')
@section('content') 


<!-- Contenu-->
<div id="band" class="container text-center">

    <h3>Ajouter une dépendance </h3>      
    <p><i class="fa fa-plus" aria-hidden="true"></i></p>
  <br>
  <div class="row">
</div>
</div>

<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            
          
          <form action="{{ route('responsable.create') }}" method="post">

                    @csrf
                    
              <div class="row">
             <div class="col-md-6 form-group mb-3">
                 
                  <label for="voirie_id" class="col-form-label"> Numéro de voirie *</label>
                  <select class = "form-control" name = "voirie_id">
                 @foreach ($voirie as $voirie)
                 <option value ="{{ $voirie->id }}"> {{ $voirie->id }} </option>
                 <!-- <label for="voirie_id" class="col-form-label"> Numéro de voirie *</label>
                  <input type="text" class="form-control" name="voirie_id" id="voirie_id" value="{{ $voirie->id }} "> -->
                 @endforeach
</select>
                 
                </div> 
                 </div>

                 <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="type_dependance" class="col-form-label"> Type dépendance *</label>
                  <input type="text" class="form-control" name="type_dependance" id="type_dependance" placeholder="saisissez le type ">
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="type_amenagement" class="col-form-label"> Type d'aménagement *</label>
                  <input type="text" class="form-control" name="type_amenagement" id="type_amenagement"  placeholder="saisissez le type d'aménagement ">
                </div>
              </div>

              

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="date_amenagement" class="col-form-label"> Date d'aménagement *</label>
                  <input type="date" class="form-control" name="date_amenagement" id="date_amenagement"  placeholder="saisissez la date d'aménagement ">
                         <span class="text-danger">@error('date_amenagement'){{ $message }}@enderror</span>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="amenageur" class="col-form-label"> L'aménageur *</label>
                  <input type="text" class="form-control" name="amenageur" id="amenageur"  placeholder="saisissez le nom d'aménageur ">
                         <span class="text-danger">@error('amenageur'){{ $message }}@enderror</span>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="etat_exploitation" class="col-form-label"> Etat d'exploitation *</label>
                  <input type="text" class="form-control" name="etat_exploitation" id="etat_exploitation"  placeholder="saisissez l'etat d'exploitation ">
                         <span class="text-danger">@error('etat_exploitation'){{ $message }}@enderror</span>
                </div>
              </div>



              <div class="row">
                <div class="col-md-12 form-group">
                <button data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-primary">Ajouter à la liste <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  <span class="submitting"></span>
                </div>
              </div>

            </form>
</div>
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
        
        votre dépendance a été ajoutée.

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


</div>

@endsection