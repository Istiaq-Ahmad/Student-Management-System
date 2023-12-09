@if(!empty(session('error'))) 
  <div class="alert alert-danger " role="alert"> 
    {{ session('error') }} 
  </div> 
@endif

@if(!empty(session('error'))) 
  <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
    {{ session('error') }} 
  </div>
@endif