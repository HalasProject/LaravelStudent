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
   


     <a href="{{ url('fiche') }}" class="btn btn-danger"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Return</a>


<br>
<br>
@if($find->count())
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
   @foreach($find as $donner)
   <tr >

    <th @if($connection == $donner->user_id) class="bg-info" @endif scope="row">{{$donner->year}}</th>
    <td>{{$donner->section}}</td>
    <td>{{$donner->groupe}}</td>
    <td>{{$donner->module}}</td>
    <td>{{$donner->type}}</td>
    <td>{{$donner->creator}}</td>
    <td>{{$donner->created_at->format('d/m/Y')}}</td>
    <td>   

      <form action="{{ url('fiche/'.$donner->id) }}" method="post">

        <a href="{{ url('fiche/show/'.$donner->id)}}" class="btn btn-info">Visualiser</a>
        @if($connection == $donner->user_id)
        <a href="{{ url('fiche/'.$donner->id.'/edit') }}" class="btn btn-warning">Edit</a>

        {{ csrf_field()}}
        {{ method_field('DELETE')}}

        <button type="submit" class="btn btn-danger">Delete</button>
        @endif
      </form>
    </td>
  </tr>

  @endforeach

</tbody>
</table>

@else
<h3 class="text-center alert alert-info">Aucun Affichage!</h3>
@endif
</div>
</div>
</div>
@endsection