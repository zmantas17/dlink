@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
<div class="container mt-5">
    <div class="accordion text-dark" id="accordionExample">
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion{{ $rma->id }}" aria-expanded="false" aria-controls="accordion{{ $rma->id }}">
                        {{ $rma->name }}
                    </button>
                </h2>
                <div id="accordion{{ $rma->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>Name:</b> {{ $rma->name }}</p>
                        <p><b>Phone:</b> {{ $rma->phone }}</p>
                        <p><b>Device P/N:</b> {{ $rma->deviceProductNumber }}</p>
                        <p><b>Device S/N:</b> {{ $rma->deviceSerialNumber }}</p>
                        <p class="mb-3"><b>Description:</b> {{ $rma->description }} </p>
                        <div class="text-center">
                            <p>Are you sure you want to delete this client?</p>
                            <a href="/rma/{{ $rma->id }}/delete/confirm" class="btn btn-success my-2 border">Yes</a>
                            <a href="/rma/{{ $rma->id }}" class="btn btn-danger my-2 mx-4 border">No</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="mb-5"></div>
    </div>
</div>
@endsection