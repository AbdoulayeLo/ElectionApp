@extends('base')
@section('content')
<div class="container card mt-5 col-md-7 mb-4">


<form action="je-parraine/traitement" method="POST">
    @csrf

    @foreach($listElec as $list_elec) 
    <div data-mdb-input-init class="form-intline mb-4"> 
      <label class="form-label mt-4 fw-bold" for="form1Example1">Prenom</label>
    <input type="text" id="form1Example1" class="form-control" value=" {{$list_elec->prenom}}" />
  </div>

  <!-- Nom input -->
  <div data-mdb-input-init class="form-intline mb-4">
      <label class="form-label mt-4 fw-bold" for="form1Example2">Nom</label>
    <input type="text" id="form1Example2" class="form-control" value="{{$list_elec->nom}}"/>
  </div>
  <!-- Nom input -->
  <!-- <div data-mdb-input-init class="form-intline mb-4">
      <label class="form-label mt-4 fw-bold" for="form1Example2">Numero parrteur</label>
    <input type="text" id="form1Example2" class="form-control" />
  </div> -->
  <!-- Nom input -->
  <div data-mdb-input-init class="form-intline mb-4">
      <label class="form-label mt-4 fw-bold" for="form1Example2">Secteur</label>
    <input type="text" id="form1Example2" class="form-control" value="{{$list_elec->adresse}}"/>
  </div>
@endforeach
<div data-mdb-input-init class="form-intline mb-4">
  <label class="form-label mt-4 fw-bold" for="form1Example2">Candidat a parrainer</label>
  
  <select class="form-select" aria-label="Default select example">
    <option selected>Ouvrir ce menu de selection</option>
    @foreach($listCand as $list_cand)
            <option value="1">{{$list_cand->prenom}} {{$list_cand->nom}}</option>
            @endforeach
        </select >
  </div>

  <!-- 2 column grid layout for inline styling -->

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-5 mt-5">JE PARRAINE</button>
</form>
</div>
@endsection