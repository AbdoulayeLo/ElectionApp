@extends('base')
@section('content')

<body>
            <div class="container mt-4">
            @if(session('status'))
              <div class="alert alert-success">
                {{ session('status' ) }}
                <button type="button" class="btn-close btn-danger float-end" aria-label="Close"></button>
              </div> 
              @endif
            </div>
                <!-- <a
                        href="{{url('ajout-electeur')}}"
                        type="button"
                        class="btn btn-success btn-rounded btn-sm fw-bold float-end mt-4 mb-4"
                        data-mdb-ripple-color="dark"
                        >
                  Ajouter Electeur
                </a> -->


  <div class="card-header">
    <div class="card-body">
      <div class="container">
        <table class=" mb-3 mt-5 table bg-dark table-bordered "> <!--border-primary-->
          <thead >
            <tr>

              <th class="fw-bold">Prenom(s) et Nom</th>
              <th class="fw-bold">Numero electeur</th>
              <th class="fw-bold">Secteur</th>
              <th class="fw-bold">Candidat</th>
              <th class="fw-bold">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach($listParr as $list_parr)
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img
                  src=""
                      alt=""
                      style="width: 45px; height: 45px"
                      class="rounded-circle"
                      />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">{{$list_parr->prenom}} {{$list_parr->nom}}""</p>
                 
                    <!-- <p class="text-muted mb-0">john.doe@gmail.com</p> -->
                  </div>
                </div>
              </td>
              <td>
                <p class="fw-normal mb-1">{{$list_parr->CNI}}"</p>
                <!-- <p class="text-muted mb-0">IT department</p> -->
              </td>
              <td>
                <span class="badge badge-success rounded-pill d-inline">{{$list_parr->adresse}}"</span>
               </td>   
              <td>
                <span class="badge badge-success rounded-pill d-inline">diomaye</span>
              </td>
              

              <td>
                <!-- <button type="button" class="btn btn-red btn-sm btn-rounded fw-bold btn-primary">
                  Edit
                </button>
                <a type="button" class="btn btn-red btn-sm btn-rounded fw-bold btn-danger" href="#">
                  Supprimer
                </a> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>

      <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
</body>
@endsection