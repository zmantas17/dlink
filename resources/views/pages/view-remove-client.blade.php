@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="{{ url()->previous() }}" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
<div class="container mt-5">
    <div class="text-right mb-3">
        <a href="/add-client" class="btn btn-success ">Add <i class="fas fa-plus-circle"></i></a>
    </div>
    <div class="accordion text-dark" id="accordionExample">
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
                            <p>Are you sure you want to delete this client?</p>
                            <a href="/client/{{ $client->id }}/delete/confirm" class="btn btn-success my-2 border">Yes</a>
                            <a href="/client/{{ $client->id }}" class="btn btn-danger my-2 mx-4 border">No</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="mb-5"></div>
    </div>
</div>
@endsection