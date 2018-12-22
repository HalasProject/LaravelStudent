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

    <form action= "{{ url('fiche') }}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <div class="form-group has-error">
            <label for="exampleFormControlSelect1">Annes</label>
            <select class="form-control " id="exampleFormControlSelect1" name="annes" value="{{ old('annes')}}">
              <option>License 1</option>
              <option>License 2</option>
              <option>License 3</option>
              <option>Master 1</option>
              <option>Master 2</option>
            </select>
            @if($errors->get('annes'))
            @foreach($errors->get('annes') as $message)
            <li>{{ $message }}</li>
            @endforeach
            @endif

          </div>
        </div>
        <div class="col-md-4 mb-3">
         <div class="form-group">
          <label for="exampleFormControlSelect1">Section</label>
          <input class="form-control @if($errors->get('section')) is-invalid @endif" id="exampleFormControlSelect1" type="number" name="section" min="1" max="5" placeholder="N° Section" value="{{ old('section')}}">
          @if($errors->get('section'))
          @foreach($errors->get('section') as $message)
          <li>{{ $message }}</li>
          @endforeach
          @endif
        </div>
      </div>
      <div class="col-md-4 mb-3">
       <div class="form-group">
        <label for="exampleFormControlSelect1">Groupe</label>
        <input class="form-control @if($errors->get('groupe')) is-invalid @endif" id="exampleFormControlSelect1" type="number" name="groupe" min="1" max="9" placeholder="N° Groupe" value="{{ old('groupe')}}">
        @if($errors->get('groupe'))
        @foreach($errors->get('groupe') as $message)
        <li>{{ $message }}</li>
        @endforeach
        @endif
      </div>

    </div>
  </div>
  <div class="form-row">
   <div class="col-md-4 mb-3">
     <div class="form-group">
      
      <label class="mr-sm-2" for="inlineFormCustomSelect">Module</label>
      <input type="text" class="form-control @if($errors->get('module_name')) is-invalid @endif" id="exampleFormControlInput1" placeholder="Name of module" name="module_name" value="{{ old('module_name') }}" >
      
      @if($errors->get('module_name'))
      @foreach($errors->get('module_name') as $message)
      <li>{{ $message }}</li>
      @endforeach
      @endif
    </div>
  </div>

  <div class="col-md-4 mb-3">
   <div class="form-group">
    
    <label class="mr-sm-2" for="inlineFormCustomSelect">Type</label>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Type_note" value="{{ old('Type_note')}}">
      <option >Test</option>
      <option >Examin</option>
      <option >TP</option>
      <option >TD</option>
      <option >Projet</option>
    </select>
    
  </div>
</div>
<div class="col-md-4 mb-3">
  <div class="form-group">
    <label for="exampleFormControlInput1">Createur</label>
    
    
    <input type="text" class="form-control @if($errors->get('creator_name')) is-invalid @endif" id="exampleFormControlInput1" placeholder="Mr. Mlle." name="creator_name" value="{{ Auth::user()->name }}">
    
    @if($errors->get('creator_name'))
    @foreach($errors->get('creator_name') as $message)
    <li>{{ $message }}</li>
    @endforeach
    @endif
  </div>
</div>
</div>
<div class="form-row">
  <div class="col-md-12 mb-3">
    <div class="form-group">
      <label for="exampleFormControlInput1">Upload</label>
      <input type="file" class="form-control" id="exampleFormControlInput1" name="photo">
      
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Remarque</label>
    <textarea class="form-control @if($errors->get('remarque')) is-invalid @endif" id="exampleFormControlTextarea1" rows="3" name="remarque"> {{old('remarque')}}  </textarea>
    @if($errors->get('remarque'))
    @foreach($errors->get('remarque') as $message)
    <li>{{ $message }}</li>
    @endforeach
    @endif
  </div>
</div>
<button class="btn btn-primary" type="submit"><i class="fas fa-file-upload"></i>&nbsp;&nbsp;Create</button>
</form>
</div>
</div>

@endsection