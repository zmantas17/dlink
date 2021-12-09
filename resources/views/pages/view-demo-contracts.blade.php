@extends('main')
<a class="btn btn-lg bg-transparent text-white" href="/demo-base" role="button"><i class="fas fa-arrow-left"></i></a>
@section('content')
<div class="container mt-5">
    <div class="text-center mb-3">
        <div class="flex">
            <div class="flex-auto">
                <a href="/view-demo-contract" class="btn view-demo-contracts-btn">All</a>
            </div>
            <div class="flex-auto">
                <a href="/view-demo-contract/finished" class="btn view-demo-contracts-btn">Finished</a>
            </div>
            <div class="flex-auto">
                <a href="/view-demo-contract/notfinished" class="btn view-demo-contracts-btn">Not finished</a>
            </div>
        </div>
    </div>
    <div class="accordion text-dark" id="accordionExample">
        @if($contracts->count() == 0)
            <div class="alert alert-secondary" role="alert">
                No contracts found!
            </div>
        @endif
        @foreach($contracts as $contract)
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion{{ $contract->id }}" aria-expanded="false" aria-controls="accordion{{ $contract->id }}">
                        {{ $contract->id }} || {{App\Models\Client::where('id', $contract->clientID)->get()[0]->name}} 
                    </button>
                </h2>
                <div id="accordion{{ $contract->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>Lease start date: </b> {{ $contract->date }}</p>
                        <p><b>Lease ends at: </b> {{ Carbon\Carbon::parse($contract->date)->addDays($contract->number)->format('Y-m-d') }} ({{ Carbon\Carbon::parse($contract->date)->addDays($contract->number)->diffForHumans(); }})</p>
                        <p><b>Lease period: </b> {{ $contract->number }} days</p>
                        <b>Last updated by:</b> {{App\Models\User::where('id', $contract->owner)->get()[0]->name}} 
                        @if($contract->status)
                        <p> <b> Status: </b> Finished </p>
                        <div class="text-center">
                             <a class="btn btn-warning border-radius" href="/contract/{{ $contract->id }}/resume" role="button">Resume this contract</a>
                             <a class="btn btn-danger border-radius" href="/contract/{{ $contract->id }}/delete/confirm" role="button"><i class="fas fa-trash"></i></a>
                        </div>
                        @else
                        <p> <b> Status: </b> Not finished </p>
                        <div class="text-center">
                            <a class="btn btn-success border-radius" href="/contract/{{ $contract->id }}/finish" role="button">Finish this contact</a>
                            <a class="btn btn-danger border-radius" href="/contract/{{ $contract->id }}/delete/confirm" role="button"><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{ $contracts->links('_partials.links') }}
        <div class="mb-5"></div>
    </div>
</div>
@endsection