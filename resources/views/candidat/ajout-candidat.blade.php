@extends('base')

@section('content')
<section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
      <div class="container h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6 mt-4 mb-4">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">

              @if(session('status'))
              <div class="alert alert-success">
                {{ session('status' ) }}
              </div> 
              @endif

              <ul>
                 @foreach($errors->all() as $error)
                    <li class="alert alert-danger"> {{$error}} </li>
                 @endforeach
              </ul>
             
<!-- "{{url('ajout-candidat/traitement')}}" -->
    <form action='/ajout-candidat/traitement'method="POST">
        @csrf
            <div class="row mb-4">
               <div class="col">
                   <div class="form-intline mb-4">
                        <label class="form-label" for="form3Example1cg">Prenom</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="prenom" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-intline mb-4">
                        <label class="form-label" for="form3Example1cg">Nom</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"name="nom" />
                    </div>
               </div>
            </div>

            <div class="form-intline mb-4">
                      <label class="form-label" for="form3Example3cg">Parti</label>
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"name="parti" />
                  </div>
                  
                  <div class="form-intline mb-4">
                      <label class="form-label" for="form3Example4cg">Image</label>
                    <input type="file" id="form3Example4cg" class="form-control form-control-lg"name="photo" />
                  </div>
                  <div class="form-intline mb-4">
                      <label class="form-label" for="form3Example4cg">Biographie</label>
                      <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="biographie">
                    </div>

                    <button class="btn btn-sm btn-success" type="submit">Valider</button>
    </form>
</div>                    
     </div>                    
        </div>                    
            </div>                    
                </div>                    
                    </div>             
</section>       
@endsection