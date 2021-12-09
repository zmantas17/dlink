@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="/" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/add-client" class="btn clients-add-btn">Add <i class="fas fa-plus-circle"></i></a>
        </div>
        <div class="col">
            <div class="text-right mb-3">
                <a class="btn clients-search-btn border-0" id="search-button"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="/search-client" method="POST" id="search-form" class="fadeOut" style="animation-duration: 1s">
            @csrf
            <input class="text-dark mb-2 rounded w-full" type="text" id="search-string" name="search-string" placeholder="Search">
        </form>
    </div>
    <div class="accordion text-dark" id="accordionExample">
        @if($clients->count() == 0)
            <div class="alert alert-secondary" role="alert">
                No client found!
            </div>
        @endif

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
                        <p class="mb-2"><b>Notes:</b> {{ $client->notes }} </p>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <a href="/client/{{ $client->id }}/delete/ask" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>

                                    <a href="/client/{{ $client->id }}/edit" class="btn btn-sm btn-warning "><i class="fas fa-pen"></i></a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="mb-3"><b>Last updated by:</b> {{App\Models\User::where('id', $client->owner)->get()[0]->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $clients->links('_partials.links') }}
        <div class="mb-5"></div>
    </div>
</div>


<script>

const searchButton = document.getElementById('search-button');
const searchForm = document.getElementById('search-form');

searchButton.addEventListener('click', () => {
    searchForm.classList.toggle('fadeOut');
    searchForm.classList.toggle('fadeIn');
});

</script>
@endsection