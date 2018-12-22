{{/*
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
  */}}


@if(session()->has('success_edit'))
   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ session()->get('success_edit')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      
    
    @endif

    @if(session()->has('succes'))
   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ session()->get('succes')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      
    
    @endif