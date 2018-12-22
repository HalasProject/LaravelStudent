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
    <h1 class="display-4">{{ $shows->module}} | {{ $shows->type}}</h1>
    

 @if($connection == $shows->user_id OR $droit == 1)
  <div class="float-right">
    <form action="{{ url('fiche/'.$shows->id) }}" method="POST">
      {{ method_field('DELETE')}}
      @csrf
      <a class="btn btn-warning"href="{{ url('fiche/'.$shows->id.'/edit')}}">EDIT</a>
      <button class="btn btn-danger" type='submit'>DELETE</button>
    </form>
  </div>
@endif

    <ul>
      <li><p class="lead"><b>Year:</b> {{$shows->year}}</p></li>
      <li><p class="lead"><b>Section:</b> {{$shows->section}}</p></li>
      <li><p class="lead"><b>Groupe:</b> {{$shows->groupe}}</p></li>
      <li><p class="lead"><b>Created by:</b> {{$shows->creator}}</p></li>
    </ul>
    <hr class="my-4">
    <h6>Remarque:</h6>
    <p>{{$shows->remarque}}</p>
    <img src="{{ asset('storage/app/public/'.$shows->note_lien) }}" alt="{{ $shows->module}},{{ $shows->type}}" class="img-fluid rounded mx-auto d-block">
  </div>

  
</div>
@endsection