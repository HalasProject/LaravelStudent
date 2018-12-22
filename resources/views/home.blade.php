@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Mes Publication</div>
        <div class="card-body">



          @if($MyPublication->count())
          <div class="row">
           @foreach($MyPublication as $donner)
           <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="{{ url('fiche/show/'.$donner->id) }}"><img class="card-img-top" height="300px" src="{{ asset('storage/'.$donner->note_lien) }}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{ url('fiche/show/'.$donner->id) }}">{{ $donner->module }} | {{ $donner->type }}</a>
                </h4>
                <p class="card-text">
                  <p><b>Year</b> : {{ $donner->year }}</p>
                  <p><b>Section</b> : {{ $donner->section }}</p>
                  <p><b>Groupe </b>:{{ $donner->groupe }}</p>
                </p><br>
                <form action="{{ url('fiche/'.$donner->id) }}" method="post">
                  <a href="{{ url('fiche/show/'.$donner->id)}}" class="btn btn-success">Show</a>
                  <a href="{{ url('fiche/'.$donner->id.'/edit') }}" class="btn btn-warning">Edit</a>

                  {{ csrf_field()}}
                  {{ method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>


              <div class="card-footer">
                <small class="text-muted">{{ $donner->created_at }}</small>
                <div>
                </div>
              </div>
            </div>
          </div>
          <br>
          @endforeach
          <hr>
          <div class="col-md-10">
            {{ $MyPublication->links() }}
          </div>

@else

<div class="alert alert-info text-center">
  Vous n'avez pas encore publier. <a href="{{ url('fiche/create')}} " ><b>Publier Mintenant !</b> </a>
</div>
@endif

        </div>
      </div>
    </div>
  </div>

  @endsection
