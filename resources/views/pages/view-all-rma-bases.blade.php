@extends('main')
@section('content')
<div class="container mt-5">
    <div class="row mb-2">
        <div class="col">
            <a href="/add-rma-base" class="btn btn-success ">Add <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
    <div class="accordion text-dark" id="accordionExample">

        @foreach($rmas as $rma)        
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion{{ $rma->id }}" aria-expanded="false" aria-controls="accordion{{ $rma->id }}">
                       {{ $rma->id }} || {{ $rma->name }}
                    </button>
                </h2>
                <div id="accordion{{ $rma->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>Name:</b> {{ $rma->name }}</p>
                        <p><b>Phone:</b> {{ $rma->phone }}</p>
                        <p><b>Device P/N:</b> {{ $rma->deviceProductNumber }}</p>
                        <p><b>Device S/N:</b> {{ $rma->deviceSerialNumber }}</p>
                        <p class="mb-3"><b>Description:</b> {{ $rma->description }} </p>
                    {{-- @if($client->owner == Auth::id()) --}}
                        <div class="text-center">
                                <a href="/rma/{{ $rma->id }}/" class="btn btn-sm btn-success "><i class="fas fa-arrow-circle-right"></i></a>
                                <a href="/rma/{{ $rma->id }}/delete/ask" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                                <a href="/rma/{{ $rma->id }}/edit" class="btn btn-sm btn-warning "><i class="fas fa-pen"></i></a>
                        </div>
                    {{-- @endif --}}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mb-5"></div>
    </div>
</div>
@endsection