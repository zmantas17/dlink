@extends('main')
@section('content')
<header class="header">
    <div class="container text-center text-white spaces ">
        <div class="mt-3 space">  
            <a href="/clients" class="btn btn-dlink rounded-pill">
               <i>Clients</i> <i class="far fa-address-book"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/rma" class="btn btn-dlink rounded-pill">
               <i>RMA Base</i>   <i class="fas fa-database"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/demo-base" class="btn btn-dlink rounded-pill">
                <i>Demo Base</i>  <i class="far fa-file-alt"></i>
            </a>    
        </div>
        <div class="mt-3 space">  
            <a href="/serial-number" class="btn btn-dlink rounded-pill">
                <i>S/N Import</i>  <i class="fas fa-align-center"></i>
            </a>    
        </div>
    </div>
    <div class="space-top text-center text-white">  
        <a href="/dashboard" class="btn btn-dlink mr-5 rounded-pill">
            <i><b>Admin</b></i>  <i class="fas fa-user-cog"></i>
        </a>  
        <a href="/logout" class="btn btn-dlink ml-5 rounded-pill">
            <i><b>Logout</b></i>  <i class="fas fa-sign-out-alt"></i>
        </a>    
    </div> 
</header>
@endsection