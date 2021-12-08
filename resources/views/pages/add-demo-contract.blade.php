@extends('main')
@section('content')
    <div class="container">
        <form action="store-demo-contract" method="POST" class="mt-5">
            @csrf
            @include("_partials/errors")
            <h5 class="text-center" style="font-size:200%">Add demo contract device</h5>
            <div class="mb-3">
                <label for="client" class="form-label">Client</label>
                <select class="form-select" name="client" id="client">
                @foreach (App\Models\Client::all() as $client)
                    <option value="{{ $client->id }}">{{$client->id}} || {{$client->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="deviceSerialNumber" class="form-label">Choose S/N</label>
                <select class="form-select" name="deviceSerialNumber" id="deviceSerialNumber">
                @foreach (App\Models\DemoDevice::all() as $device)
                    <option value="{{ $device->id }}">{{$device->id}} || {{$device->deviceSerialNumber}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Start date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Choose leasing period</label>
                <input type="number" class="form-control" id="number" name="number">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
            
        </form>
    </div>
    <div class="mb-5"></div>
@endsection