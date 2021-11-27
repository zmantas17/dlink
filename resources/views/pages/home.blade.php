@extends('main')
@section('content')
<header>
    <div class="container text-center text-white spaces ">
        <div class="mt-3 space">  
            <a href="/clients" class="btn btn-primary text-dark rounded-pill">
               <i>Clients</i>   <i class="far fa-address-book"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/" class="btn btn-primary text-dark rounded-pill">
               <i>RMA Base</i>   <i class="fas fa-database"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/" class="btn btn-primary text-dark rounded-pill">
                <i>Demo Base</i>  <i class="far fa-file-alt"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/" class="btn btn-primary text-dark rounded-pill">
                <i>S/N Import</i>  <i class="fas fa-align-center"></i>
            </a>    
        </div>
    </div>
    <div class="space-top text-center text-white pb-5">  
        <a href="/dashboard" class="btn btn-primary mr-5 text-dark rounded-pill">
            <i><b>Admin</b></i>  <i class="fas fa-user-cog"></i>
        </a>  
        <a href="/logout" class="btn btn-primary ml-5 text-dark rounded-pill">
            <i><b>Logout</b></i>  <i class="fas fa-sign-out-alt"></i>
        </a>    
    </div> 
</header>
@endsection