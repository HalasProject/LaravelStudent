{{
  /*
  |--------------------------------------------------------------------------
  | StudNote v1
  |--------------------------------------------------------------------------
  | Contact me for anything that concerns the project ! :)
  | Creator : Salah Eddine Bentayeb
  | GitHub  : https://github.com/HalasProject/
  | Facebook: https://www.facebook.com/BentayebSalah
  | Twitter : https://twitter.com/halasdior
  | LinkedIn: https://www.linkedin.com/in/salahbentayeb/
  | 
  */
  }}
@extends('layouts.app')

@section('content')

<div class="container">
  <div class="jumbotron">
   @include('layouts.FlashMessage')
   
   <span class="badge badge-secondary">Total {{ $count }}</span>


   <div class="float-right">
     <a href="{{ url('fiche/create') }}" class="btn btn-success "><i class="fas fa-plus"></i>&nbsp;&nbsp;Nouveau Affichage</a>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
      <i class="fas fa-search"></i>&nbsp;&nbsp;Rechercher
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Rechercher</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('fiche/search')}}" method="GET">
              <div class="form-row justify-content-center ">
                <div class="form-group col-md-4">
                  <label for="inputState">Year</label>
                  <select id="inputState" class="form-control" name="year">

                    <option>License 1</option>
                    <option>License 2</option>
                    <option>License 3</option>
                    <option>Master 1</option>
                    <option>Master 2</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState">Section</label>
                  <input id="inputState" name='section' type="number" min='1' max="5" class="form-control">
                </div>

                <div class="form-group col-md-2">
                  <label for="inputState">Groupe</label>
                  <input id="inputState" name='groupe' type="number" min='1' max="10" class="form-control">
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>


  <br>
  <br>
  @if($fiches->count())
  <table class="table table-striped table-dark rounded ">
    <thead class="thead-dark ">
      <tr>
        <th scope="col">Year</th>
        <th scope="col">Section</th>
        <th scope="col">Groupe</th>
        <th scope="col">Module</th>
        <th scope="col">Type</th>
        <th scope="col">Createur</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($fiches as $donner)
     <tr >
@if($connection == $donner->user_id)
      <th  scope="row"><i title="Creé par vous !" class="fas fa-street-view"></i>&nbsp;&nbsp;{{$donner->year}}</th>
      @else
     <th  scope="row">{{$donner->year}}</th>
      @endif 
      <td>{{$donner->section}}</td>
      <td>{{$donner->groupe}}</td>
      <td>{{$donner->module}}</td>
      <td>{{$donner->type}}</td>
      <td>{{$donner->creator}}</td>
      <td>{{$donner->created_at->format('d/m/Y')}}</td>
      <td>   

        <form action="{{ url('fiche/'.$donner->id) }}" method="post">

          <a href="{{ url('fiche/show/'.$donner->id)}}" class="btn btn-info"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualiser</a>
          @if($connection == $donner->user_id OR $droit == 1)
          <a href="{{ url('fiche/'.$donner->id.'/edit') }}" class="btn btn-warning"><i class="fas fa-wrench"></i>&nbsp;&nbsp;Edit</a>

          {{ csrf_field()}}
          {{ method_field('DELETE')}}

          <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</button>
          @endif
        </form>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
{{ $fiches->links() }}
@else
<h3 class="text-center alert alert-info">Aucun Affichage!</h3>
@endif
</div>
</div>
</div>
@endsection