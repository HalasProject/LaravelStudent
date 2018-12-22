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
    @if (session()->has('deleted'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ session()->get('deleted')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    <br>
    <br>
    @if($AllMessage->count())
    <table class="table table-striped table-dark rounded ">
      <thead class="thead-dark ">
        <tr>
          <th scope="col">Gender</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Sujet</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach($AllMessage as $donner)
       <tr >

         <th scope="row">{{$donner->gender}}</th>
         <td>{{$donner->nom}}</td>
         <td>{{$donner->prenom}}</td>
         <td>{{$donner->objet}}</td>
         <td>{{$donner->created_at->format('d/m/Y')}}</td>
         <td>   

          <form action="{{ url('contact/'.$donner->id) }}" method="post">

            <a href="{{ url('contact/MessageDetaille/'.$donner->id)}}" class="btn btn-info"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualiser</a>

            {{ csrf_field()}}
            {{ method_field('DELETE')}}

            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</button>

          </form>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
  
  @else
  <h3 class="text-center alert alert-info">Aucun Messages!</h3>
  @endif
</div>
</div>
</div>
@endsection