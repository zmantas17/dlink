@extends('main')
@section('content')
<div class="container mt-5">
    <div class="text-right mb-3">
        <a href="/add-client" class="btn btn-success ">Add <i class="fas fa-plus-circle"></i></a>
    </div>
    <div class="accordion text-dark" id="accordionExample">
        @foreach($clients as $client)        
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion{{ $client->id }}" aria-expanded="false" aria-controls="accordion{{ $client->id }}">
                        {{ $client->id }} || {{ $client->name }}
                    </button>
                </h2>
                <div id="accordion{{ $client->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>ID:</b> {{ $client->id }}</p>
                        <p><b>Address:</b> {{ $client->address }}</p>
                        <p><b>Phone:</b> {{ $client->phone }}</p>
                        <p><b>Email:</b> {{ $client->email }}</p>
                        <p><b>Contact Name:</b> {{ $client->contactName }}</p>
                        <p><b>Contact Phone:</b> {{ $client->contactPhone }}</p>
                        <p class="mb-3"><b>Notes:</b> {{ $client->notes }} </p>
                        <div class="text-center">
                                <a href="/client/{{ $client->id }}/delete/ask" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                                <a href="/client/{{ $client->id }}/edit" class="btn btn-sm btn-warning "><i class="fas fa-pen"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mb-5"></div>
    </div>
</div>
@endsection