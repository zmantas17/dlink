@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="/" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
<header class="header">
    <div class="container text-center spaced">
        <div class="mt-3 ">  
            <a href="/add-demo-device" class="btn btn-dlink rounded-pill text-2xl">
               <i>New demo device</i> <i class="fas fa-plus-circle"></i>
            </a>    
        </div>
        <div class="mt-3">  
            <a href="/add-demo-contract" class="btn btn-dlink rounded-pill text-2xl">
               <i>New demo contract</i> <i class="fas fa-file-contract"></i>
            </a>    
        </div>
        <div class="mt-3">  
            <a href="/view-demo-contract" class="btn btn-dlink rounded-pill text-2xl">
                <i>View demo contracts</i>  <i class="fas fa-eye"></i>
            </a>    
        </div>
    </div>
</header>
@endsection