@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')

<div class="container d-flex justify-content-center mt-5">
    <div class="card border-radius bg-transparent" style="width: 18rem; border: 1px solid #58dcfa;">
        <div class="card-body text-center">
            <p class="my-2" style="font-size: 1.5rem;">{{ $rma->name }}</p>
            <p><b style="color: #58dcfa;">Phone:</b> {{ $rma->phone }}</p>
            <p><b style="color: #58dcfa;">Device P/N:</b> {{ $rma->deviceProductNumber }}</p>
            <p><b style="color: #58dcfa;">Device S/N:</b> {{ $rma->deviceSerialNumber }}</p>
        </div>
        <div class="text-center mb-3">
            <a href="{{ url()->previous() }}" class="btn view-rma-base-btn"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </div>
</div>
@endsection