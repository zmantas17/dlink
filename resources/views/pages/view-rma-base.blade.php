@extends('main')
@section('content')

<div class="container d-flex justify-content-center mt-5">
    <div class="card bg-dark border-radius text-white border pb-2" style="width: 18rem;">
        <div class="card-body">
            <p><b>Name:</b> {{ $rma->name }}</p>
            <p><b>Phone:</b> {{ $rma->phone }}</p>
            <p><b>Device P/N:</b> {{ $rma->deviceProductNumber }}</p>
            <p><b>Device S/N:</b> {{ $rma->deviceSerialNumber }}</p>
        </div>
        <div class="text-center">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-success "><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </div>
</div>
@endsection