
@extends('layouts.app')

@section('content')

<div class="container">

  <div class="jumbotron">
    <h1 class="display-4">{{ $info->nom}} | {{ $info->objet}}</h1>
    


    <form action="{{ url('contact/'.$info->id) }}" method="POST">
      {{ method_field('DELETE') }}
      @csrf
      <button class="btn btn-danger" type='submit'>DELETE</button>
    </form>

    <p><b> {{$info->gender}}</b> {{$info->nom}} {{$info->prenom}}</p>
    <ul>

      <li><p class="lead"><b>Objet:</b> {{$info->objet}}</p></li>
      <li><p class="lead"><b>Email:</b> {{$info->email}}</p></li>
    </ul>
    <hr class="my-4">
    <h6>Message:</h6>
    <p>{{$info->text}}</p>
  </div>

  
</div>
@endsection